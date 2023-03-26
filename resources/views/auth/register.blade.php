<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mahir Qurban - Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>


    <!-- Section: Design Block -->
    <section class="background-radial-gradient overflow-hidden">
        <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
            <div class="row gx-lg-5 align-items-center mb-5">
                <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                    <h1 class="my-5 display-5 fw-bold ls-tight" style="color: #07683B">
                        MahirFarm <br />
                        <span style="color: #F26F21">Solusi Terbaik Kebutuhan Qurbanmu</span>
                    </h1>
                    <p class="mb-4 opacity-70" style="color: hsl(0, 0%, 0%)">
                        "Dan bagi setiap umat telah Kami syariatkan penyembelihan (qurban),
                        agar mereka menyebut nama Allah atas rezeki yang dikaruniakan Allah kepada mereka berupa hewan
                        ternak.
                        Maka Tuhanmu ialah Tuhan Yang Maha Esa, karena itu berserahdirilah kamu kepada-Nya."
                    </p>
                </div>

                <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                    <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                    <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                    <div class="card bg-glass">
                        <div class="card-body px-4 py-5 px-md-5">
                            <form action="{{ route('register') }}" method="POST">
                                @csrf
                                <!-- 2 column grid layout with text inputs for the first and last names -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="name">Name :</label>
                                    <input type="text" id="name" name="name" class="form-control" />
                                </div>

                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="email">Email address</label>
                                    <input type="email" name="email" id="email" class="form-control" />
                                </div>

                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="password">Password</label>
                                    <input type="password" id="password" name="password" class="form-control" />
                                </div>

                                {{-- password confirmation --}}
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="password_confirmation">Password Confirmation</label>
                                    <input type="password" id="password_confirmation" name="password_confirmation"
                                        class="form-control" />
                                </div>

                                <!-- Checkbox -->
                                <div class="form-outline mb-4">
                                    <label for="country">Select Country</label>
                                    <select name="country" id="country" class="form-control">
                                        <option value="" selected disabled>Choose your country</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Brunei Darussalam">Brunei Darussalam</option>
                                        <option value="Singapore">Singapore</option>
                                    </select>
                                </div>

                                <!-- Submit button -->
                                <button type="submit" class="btn btn-primary btn-block mb-4">
                                    Sign up
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section: Design Block -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
