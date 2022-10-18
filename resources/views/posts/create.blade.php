<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Creative - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>    

    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Post</h3>
                        <p>Fill in the data below.</p>
                        <form  method="POST" action="/post" class="requires-validation">
                            @csrf
                            <div class="col-md-12">
                               <input class="form-control" type="text" name="title" placeholder="Title">
                               @error('title')
                               <div class="invalid-feedback">Title field cannot be blank!</div>
                               @enderror
                            </div>

                            <div class="col-md-12">
                                <input class="form-control" type="text" name="category" placeholder="Category">
                                @error('category')
                                 <div class="invalid-feedback">Category field cannot be blank!</div>
                                @enderror
                            </div>
                           <div class="col-md-12">
                              <input class="form-control" type="text" name="description" placeholder="Description">
                            @error('description')
                               <div class="invalid-feedback">Description field cannot be blank!</div>
                            @enderror
                           </div>

                            <div class="form-button mt-3">
                                <button id="submit" type="submit" class="btn btn-primary">Register</button>
                            </div>
                            <div>
                            <a style="color:black;" href="/">Back</a>
                        </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
