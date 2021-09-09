<x-admin-layout>
    <form action="/login" method="post">
        @csrf
        <div>
            <label>Email</label>
            <input type="text" name="email" />
        </div>
        <div>
            <label>Password</label>
            <input type="password" name="password" />
        </div>
        <button type="submit">Login</button>
    </form>
</x-admin-layout>
