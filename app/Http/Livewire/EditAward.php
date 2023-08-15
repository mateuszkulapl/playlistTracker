<?php

namespace App\Http\Livewire;

use App\Models\Award;
use Livewire\Component;

class EditAward extends Component
{
    public $category;
    public $percentage;
    public $name;
    public $awardId;
    public $order = 0;

    protected $rules = [
        'name' => 'required|min:1|max:255',
        'percentage' => 'required|decimal:0,2|min:0|max:100',
    ];
    protected $listeners = [


    ];

    public function mount($award)
    {
        if ($award != null) {
            $this->name = $award->name;
            $this->percentage = $award->percentage;
            $this->order = $award->percentage * 100;
            $this->awardId = $award->id;
        } else {
            $this->order = -1;
        }
    }

    public function render()
    {
        return view('livewire.edit-award');
    }

    public function submit()
    {
        $this->validate();
        if ($this->awardId == null) {
            $this->category->awards()->create([
                'name' => $this->name,
                'percentage' => $this->percentage,
            ]);
        } else {
            $this->category->awards()->where('id', $this->awardId)->update([
                'name' => $this->name,
                'percentage' => $this->percentage,
            ]);
        }
        $this->updateOrder();

        if ($this->awardId == null)
            $this->reset('name', 'percentage');
        $this->emit('awardsupdated');
    }
    public function updateOrder()
    {
        if ($this->awardId) {
            $this->order = $this->percentage * 100;
        } else {
            $this->order = -1;
        }
    }
    public function delete()
    {
        if ($this->awardId != null) {
            Award::find($this->awardId)->delete();
            $this->emit('awardsupdated');
        }
    }
}
