
    <div class="login">
        <div class="col-4 bg-white border rounded p-4 shadow-sm">
            <form method="POST" action="assets/php/process.php?signup">
                <div class="d-flex justify-content-center">

                    <img class="mb-4" src="assets/images/pictogram.png" alt="" height="45">
                </div>
                <h1 class="h5 mb-3 fw-normal">Create new account</h1>
                <div class="d-flex">
                    <div class="form-floating mt-1 col-6 ">
                        <input type="text" name="first_name" class="form-control rounded-0" placeholder="username/email">
                        <label for="floatingInput">first name</label>
                    </div>
                    <div class="form-floating mt-1 col-6">
                        <input type="text" name="last_name" class="form-control rounded-0" placeholder="username/email">
                        <label for="floatingInput">last name</label>
                    </div>
                </div>
                <div class="d-flex gap-3 my-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="gender1"
                            value="1" checked>
                        <label class="form-check-label" for="gender1">
                            Male
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="gender3"
                            value="2">
                        <label class="form-check-label" for="gender3">
                            Female
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="gender2"
                            value="0">
                        <label class="form-check-label" for="gender2">
                            Other
                        </label>
                    </div>
                </div>
                <div class="form-floating mt-1">
                    <input type="email" class="form-control rounded-0" name="email placeholder="username/email">
                    <label for="floatingInput">email</label>
                </div>
                <div class="form-floating mt-1">
                    <input type="text" name= "username" class="form-control rounded-0" placeholder="username/email">
                    <label for="floatingInput">username</label>
                </div>
                <div class="form-floating mt-1">
                    <input type="password" name="password" class="form-control rounded-0" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">password</label>
                </div>

                <div class="mt-3 d-flex justify-content-between align-items-center">
                    <button class="btn btn-primary" type="submit">Sign Up</button>
                    <a href="#" class="text-decoration-none">Already have an account ?</a>


                </div>

            </form>
        </div>
    </div>


   