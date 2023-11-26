@extends('common.master')
@section('content')
                        
            <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Fardin Faiaz Khan</title>
    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <style>
      body {
        font-family: "Arial", sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
      }
      header {
        background-color: #333;
        color: #fff;
        padding: 1em 0;
        text-align: center;
      }
      section {
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin: 20px auto;
        max-width: 800px;
        padding: 20px;
      }
    </style>
  </head>
  <body>
    <header>
      <h1>Contact Fardin Faiaz Khan</h1>
    </header>

    <section class="container">
      <form id="contactForm" action="#" method="post">
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" class="form-control" id="name" name="name" />
        </div>

        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" name="email" />
        </div>

        <div class="form-group">
          <label for="message">Message:</label>
          <textarea
            class="form-control"
            id="message"
            name="message"
            rows="4"
          ></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </section>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>


@endsection