<x-admin-layout>
    <form action="/login" method="post">
        @csrf
        <input type="password" name="password" />
    </form>
</x-admin-layout>
