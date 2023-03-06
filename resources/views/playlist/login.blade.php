<x-layout>
<div class="text-center mx-auto block w-96 ">
    <h2 class="text-lg">Podaj hasło</h2>
    <form action="/" method="post">
        @csrf
        <input type="password" class="shadow appearance-none border border-red-500 rounded w-full py-2 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline text-center px-1" id="login" type="password" name="login"></form>
    </form>
    </div>
</x-layout>
