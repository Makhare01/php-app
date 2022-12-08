<div class="d-flex flex-column justify-content-center" style="min-height: 100vh">
    <div class="shadow bg-body rounded">
        <div class="row w-100">
            <div class="col-6">
                <img alt="logo" src="./images/bg.jpg" width="100%" height="600px" />
            </div>
            <div class="col-6 d-flex flex-column justify-content-center align-items-center">
                <h1 class="text-center mb-5">Login</h1>

                <form class="border w-50 p-3 py-5 rounded" style="background-color: #F9FAFC" id="login-form" action="" method="POST">
                    <div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="pass" class="form-control" placeholder="Password">
                        </div>
                    </div>
                </form>

                <button type="submit" form="login-form" class="btn btn-outline-primary mt-3 w-50">Login</button>
            </div>
        </div>
    </div>
</div>