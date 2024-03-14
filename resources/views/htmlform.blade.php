<h1>Form Logins</h1>
<div class="container">
    <div>
        <form method="POST" action="html_form">
            @csrf
            <div class="row">
                <div class="col">
                    <input type="text" name="name" id="name" placeholder="Name">
                </div><span style="color: red">@error('name'){{$message}}@enderror</span>
                <br />
                <div class="col">
                    <input type="text" name="mobile" id="mobile_number" placeholder="MobileNumbet">
                </div>
                {{-----------------Validation Part Is Requiered------------------ --}}
                <span style="color: red">@error('mobile'){{$message}}@enderror
            <br />
                <div class="col">
                    <input type="text" name="password" id="password" placeholder="password">
                </div>
                <span style="color: red">@error('password'){{$message}}@enderror
            </div>
            <br />
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
