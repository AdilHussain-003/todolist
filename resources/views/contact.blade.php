<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - My Simple To-Do List</title>
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
</head>

<body>
    <header>
        <h1>Contact Us</h1>
    </header>

    @include('layouts.nav')

    
    <main>

        

        <div class="container">
            <div class="contact-info">
                <h2>Reach out and let's make things happen together.</h2>
            </div>
            <div class="contact-info">
                <h2>Connecting is the first step towards endless possibilities.</h2>
            </div>
            <div class="contact-info">
                <h2>Your feedback fuels our growth. Reach us, we're listening.</h2>
            </div>
        </div>



        <!-- Contact Information Section-->

        <section class="contact-container">
            <div class="contact-infos">
                <h2>Contact Information</h2>
                <p>Email: simpletodolist@todo.com</p>
                <p>Phone: 033311199900</p>
                <p>Address: Z11 Main Street, Islamabad, Pakistan</p>
            </div>

            <div class="contact-infos">
                <h2>Additional Contacts</h2>
                <p>Customer Support: supportsimpletodolist@todolist.com</p>
                <p>Feedback: feedbacksimpletodolist@todolist.com</p>
                <p>Press Inquiries: press_simpletodolist@todolist.com</p>
            </div>
        </section>

    </main>

    @include('layouts.footer')

    <script src="{{ asset('js/contact.js') }}"></script>
</body>

</html>
