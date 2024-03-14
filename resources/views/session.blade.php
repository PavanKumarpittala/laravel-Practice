<h1>Sessions Logout</h1>

<div class="class">
    <form action="/session" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Enter Name">
        <br /><br />
        <input type="text" name="password" placeholder="Enter Password">
        <br /><br />
        <button type="submit">Log IN</button>
</div>