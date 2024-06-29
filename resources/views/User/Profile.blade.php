<div>
    <!-- You must be the change you wish to see in the world. - Mahatma Gandhi -->
    
    <!-- Profile section -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('update.profile') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">First Name: </label>
                        {{$user['user_fname']}}
                        <br>
                        <label for="name">Last Name: </label>
                        {{$user['user_lname']}}
                        <br>
                        <label for="name">Email: </label>
                        {{$user['user_email']}}
                        <br>
                        <label for="name">Contact Number: </label>
                        <input type="text" name="user_contact" id="user_contact" value="{{$user['user_contact']}}" required>
                        <br>
                        <label for="name">Address: </label>
                        <input type="text" name="user_addr" id="user_addr" value="{{$user['user_addr']}}" required>
                        <br>
                        <label for="name">Password: </label>
                        <input type="password" name="user_password" id="user_password" required>
                        <br>
                        <label for="name">Confirm Password: </label>
                        <input type="password" name="confirm_user_password" id="confirm_user_password" required>
                        <br>
                        <br>
                        <br>
                        <input type="hidden" name="user_id" value="{{$user['user_id']}}">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('home') }}" class="button btn">Back to home</a>
                    </div>
                </form>
            </div>
        </div>
    </div>   

</div>
