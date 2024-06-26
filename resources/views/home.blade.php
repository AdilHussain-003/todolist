<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - My Simple To-Do List</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

</head>

<body>
    @include('layouts.header')
    @include('layouts.nav')

    <main>
        <section id="features-section">
            <h2>Unlock Your Productivity Potential</h2>
            <p>With our My Simple To-Do List, managing your tasks becomes a breeze...</p><br>
            <h2>Features</h2>
            <ul>
                <li>Add new to-do items</li>
                <li>View a list of all current to-do items</li>
                <li>Delete completed to-do items</li>
            </ul>
        </section>

        <div id="media-container">
            <aside id="image-section">
                <figure>
                    <img src="{{ asset('images/tlist.png') }}" alt="To-Do List Image">
                    <figcaption>Stay organized with My Simple To-Do List</figcaption>
                </figure>
            </aside>

            <section id="video-section">
                <h2>Watch Tutorial</h2>
                <video controls loop>
                    <source src="{{ asset('videos/Tips for Effective Time Management.mp4') }}" type="video/mp4">
                </video>
            </section>
        </div>
    </main>

    @include('layouts.footer')

</body>

</html>
