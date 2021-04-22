<main>
    <div class="container w-25 mt-5">
        <div class="border p-3">
            <h3 class="text-center">SignIn</h3>
            <form>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" class="form-control">
                </div>

                <div class="form-group mt-2">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control">
                </div>
                
                <div class="form-group mt-2">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control">
                </div>
                
                <div class="form-group mt-2">
                    <label for="confirm_password">Confirm password</label>
                    <input type="password" id="confirm_password" name="confirm_password" class="form-control">
                </div>
                
                <div class="form-group clearfix mt-3">
                    <input type="submit" class="btn btn-primary float-end" value="SignIn">
                    <input type="reset" class="btn btn-outline-dark float-end mx-2" value="Reset">
                </div>
            </form>
        </div>
    </div>
</main>