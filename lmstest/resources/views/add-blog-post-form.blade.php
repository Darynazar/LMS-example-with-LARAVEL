<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/assets/fonts/FontAwesome.Pro.5.15.2.Web/css/all.min.css">

<body>
    <div class="container mt-4">
        @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
        <div class="card">
            <div class="card-header text-center font-weight-bold">
                Adminstrate
            </div>
            <div class="card-body">
                <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('store-form')}}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">firstname</label>
                        <input type="text" id="firstname" name="firstname" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Lastname</label>
                        <input type="text" id="lastname" name="lastname" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" id="title" name="title" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Description</label>
                        <textarea name="description" class="form-control" required=""></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mt-5">Submit</button>

                    <button type="submit" class="btn btn-success mt-5">Prosecutes</button>
                    <a href="{{url('home')}}">
                        <button class="btn btn-danger mt-5">Exit</button>
                    </a>
                </form>

            </div>
        </div>
    </div>
</body>

</html>