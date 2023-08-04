<?php

namespace App\Mail;

use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Collection;

class WeeklyStats extends Mailable
{
    use Queueable, SerializesModels;
    public $watchedGroups;
    public $motivationalQuote;
    /**
     * Create a new message instance.
     */
    public function __construct(public Collection $watchedItems, public Carbon $start, public Carbon $end)
    {
        $this->watchedGroups = $watchedItems->groupBy('category.name');
        $this->motivationalQuote = $this->getMotivationalQuote();
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'CIF: Statystyki ' . $this->start->isoFormat('DD.MM.YYYY') . ' - ' . $this->end->isoFormat('DD.MM.YYYY'),
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            html: 'emails.stats.weekly',
            text: 'emails.stats.weekly-text',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
    private function getMotivationalQuote()
    {
        $quotes = collect([
            "Nie przestawaj się uczyć, bo wiedza to klucz do sukcesu!",
            "Pamiętaj, że proces nauki to podróż, a nie cel.",
            "Każdy krok, który robisz w kierunku nauki, jest krokiem w kierunku przyszłości.",
            "Nie ma nic lepszego od uczucia, kiedy zrozumiesz nowy koncept.",
            "Pamiętaj, że każdy dzień to nowa możliwość do nauki.",
            "Sukces to suma małych wysiłków, powtarzanych dzień po dniu.",
            "Nauka to brama do nieskończonych możliwości.",
            "Ciągłe kształcenie jest tajemnicą wiecznej młodości.",
            "Pozwól, aby twoja ciekawość prowadziła cię do nowych odkryć.",
            "Nigdy nie jest za późno na naukę czegoś nowego.",
            "Bądź cierpliwy, nauka wymaga czasu.",
            "Bądź głodny wiedzy, zawsze.",
            "Zawsze dąż do doskonałości, ale nigdy nie zapominaj o drodze, którą przeszedłeś.",
            "Nauka to siła, a Ty stajesz się coraz silniejszy.",
            "Pamiętaj, że jedyną rzeczą, której nie możemy odzyskać, jest czas niewykorzystany na naukę.",
            "Każdy dzień jest dobrym dniem do nauki.",
            "Nigdy nie przestawaj pytać, nigdy nie przestawaj się uczyć.",
            "Zawsze idź naprzód. Nauka to postęp.",
            "Podążaj za swoją pasją, a nauka stanie się przyjemnością.",
            "Wszystko, czego nauczyłeś się do tej pory, jest fundamentem twojej przyszłości.",
            "Nauka jest jak wspinaczka po górze. Im wyżej wchodzisz, tym dalej widzisz.",
            "Nie boj się błędów, są one integralną częścią procesu nauki.",
            "Nauka to nie tylko wiedza, ale też umiejętność zastosowania jej w praktyce.",
            "Pamiętaj, że nie ma granic dla tego, czego możesz się nauczyć.",
            "Nie ma większej radości niż ta, która pochodzi z rozumienia.",
            "Pozwól swojej wiedzy świecić i oświecać świat.",
            "Nie zatrzymuj się na zdobytym, zawsze jest coś nowego do nauczenia się.",
            "Czyń z nauki swoją codzienną rutynę, a zobaczysz jak szybko rosną twoje umiejętności.",
            "Nigdy nie zapominaj o tym, jak daleko już zaszedłeś.",
            "Gratulacje za kolejny tydzień pełen nauki! Czekamy na Ciebie w następnym tygodniu.",
        ]);

        return $quotes->random();
    }
}
