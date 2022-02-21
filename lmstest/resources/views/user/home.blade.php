<x-app-layout>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/assets/fonts/FontAwesome.Pro.5.15.2.Web/css/all.min.css">
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
        <style>
            a {
                text-decoration: none;
            }

            body {
                background-color: white;
            }

            img {
                width: 100%;
            }
        </style>

    </head>


    <body>



        <div class="contaner-fluid">
            <div class="row">
                <div class="container col-md-12" style="text-align: center; background-color:aquamarine;">
                    <div class="row">
                        <h2>Learning Management System</h2>
                    </div>
                </div>
            </div>
        </div>




        <div class="container mt-6">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3 w-24 mr-2" style="width: 24%;">
                        <div class="row shadow">
                            <div class="col-md-5 bg-white">
                                <div class="row">
                                    <div class="administrative mt-4">
                                        <img src="	https://erp.qut.ac.ir/Subsystem/Total/Resource/MenuIcon/office-domain.png" class="responsive" alt="adminstrative">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="row">
                                    <div class="info mt-4">
                                        <a href="{{ url('add-blog-post-form') }}" class="hover" style="text-align: center;">
                                            <h5 style="color: black;">administrative</h5>
                                            <p style="color: black;">Cartable, password,buy</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 w-24 mr-2" style="width: 24%;">
                        <div class="row shadow" style="border-radius: 4px;">

                            <div class="col-md-5 bg-white">
                                <div class="row">
                                    <div class="administrative mt-4">
                                        <img src="	https://erp.qut.ac.ir/Subsystem/Total/Resource/MenuIcon/Register.png" class="responsive" alt="adminstrative">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="row">
                                    <div class="info mt-4">
                                        <a href="{{ url('indexlesson') }}" class="hover" style="text-align: center;">
                                            <h5 style="color: black;">Didactic</h5>
                                            <p style="color: black;">Select lesson, Score,Planning</p>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 w-24 mr-2" style="width: 24%;">
                        <div class="row shadow" style="border-radius: 4px;">

                            <div class="col-md-5 bg-white">
                                <div class="row">
                                    <div class="administrative mt-4">
                                        <img src="	https://erp.qut.ac.ir/SubSystem/pazhuheshi/Resource/MenuIcon/thesis.png" class="responsive" alt="adminstrative">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="row">
                                    <div class="info mt-4">
                                        <a href="{{ url('indexknowledge') }}" class="hover" style="text-align: center;">
                                            <h5 style="color: black;">Konlegde Complete</h5>
                                            <p style="color: black;">News,Exam</p>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 w-24 mr-2" style="width: 24%;">
                        <div class="row shadow" style="border-radius: 4px;">

                            <div class="col-md-5 bg-white">
                                <div class="row">
                                    <div class="administrative mt-4">
                                        <img src="	https://erp.qut.ac.ir/Subsystem/Total/Resource/MenuIcon/fishe-shahriye.png" class="responsive" alt="adminstrative">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="row">
                                    <div class="info mt-4">
                                        <a href="{{ url('tuition') }}" class="hover" style="text-align: center;">
                                            <h5 style="color: black;">Tuition</h5>
                                            <p style="color: black;">Online pay tuition,Installment</p>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 w-24 mr-2 mt-10" style="width: 24%; margin-top:1%">
                        <div class="row shadow" style="border-radius: 4px;">

                            <div class="col-md-5 bg-white">
                                <div class="row">
                                    <div class="administrative mt-4">
                                        <img src="	https://erp.qut.ac.ir/Subsystem/Total/Resource/MenuIcon/food.png" class="responsive" alt="adminstrative">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="row">
                                    <div class="info mt-4">
                                        <a href="{{ url('indexfood') }}" class="hover" style="text-align: center;">
                                            <h5 style="color: black;">Nutrition</h5>
                                            <p style="color: black;">Bills,buy</p>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 w-24 mr-2" style="width: 24%; margin-top:1%">
                        <div class="row shadow" style="border-radius: 4px;">

                            <div class="col-md-5 bg-white">
                                <div class="row">
                                    <div class="administrative mt-4">
                                        <img src="	https://erp.qut.ac.ir/Subsystem/Daneshjoe/Sleep/Resource/MenuIcon/sleep.png" class="responsive" alt="adminstrative">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="row">
                                    <div class="info mt-4">
                                        <a href="{{ url('indexstudent') }}" class="hover" style="text-align: center;">
                                            <h5 style="color: black;">Studenthotels</h5>
                                            <p style="color: black;">Rollcall,Rent,etc...</p>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>

    </html>


</x-app-layout>