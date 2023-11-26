@extends('common.master')
@section('content')

        <link
          rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        />
        <style>
          body {
            background-color: #f4f4f4;
          }
          header {
            background-color: #333;
            color: #fff;
            padding: 1em 0;
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
        <header class="text-center">
          <h1>Welcome to [Your Name]'s World!</h1>
        </header>

        <section class="container">
          <h2>About Me</h2>
          <p class="lead">
            I'm not just a Student, I'm a [Brief Description of
            Yourself]. Whether I'm coding lines of elegant code, designing
            eye-catching graphics, or diving into the latest tech trends, I
            bring a unique blend of [Your Unique Qualities] to everything I do.
          </p>

          <h2>What I Do</h2>
          <ul>
            <li>
              ✨ <strong>Web Development:</strong> Crafting seamless and
              responsive websites that leave a lasting impression.
            </li>
            <li>
              🎨 <strong>Design:</strong> Transforming ideas into visually
              stunning designs that captivate and inspire.
            </li>
            <li>
              💻 <strong>Tech Enthusiast:</strong> Always exploring the latest
              technologies to stay at the forefront of innovation.
            </li>
          </ul>

          <h2>Why Choose Me</h2>
          <ul>
            <li>
              🚀 <strong>Passion-Driven:</strong> I don't just work; I create.
              My passion fuels every project, ensuring exceptional results.
            </li>
            <li>
              🤝 <strong>Collaborative:</strong> I believe in the power of
              collaboration. Let's work together to turn your ideas into
              reality.
            </li>
          </ul>

          <h2>Let's Connect</h2>
          <p class="lead">
            Ready to take your digital presence to the next level? Let's connect
            and explore the possibilities! Whether you have a project in mind or
            just want to say hello, I'm always open to new opportunities and
            collaborations.
          </p>
          <ul>
            <li>📧 <a href="mailto:your.email@example.com">fardinfaiaz5@gamil.com</a></li>
            <li>📱 01741469635</li>
          </ul>
        </section>

        <!-- Bootstrap JS and Popper.js -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@endsection