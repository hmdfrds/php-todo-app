<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Simple Session To-Do List</title>

        <style>
        body {
            font-family: sans-serif;
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #eee;
        }

        ul {
            list-style: none;
            padding: 0;
            margin-top: 20px;
        }

        li {
            border-bottom: 1px solid #eee;
            padding: 10px 5px;
        }

        li:last-child {
            border-bottom: none;
        }

        .add-form {
            margin-top: 20px;
            padding-top: 15px;
            border-top: 1px solid #ccc;
        }

        .add-form input[type="text"] {
            padding: 8px;
            margin-right: 5px;
            min-width: 250px;
        }

        .add-form button {
            padding: 8px 15px;
        }

        h1,
        h2 {
            margin-top: 0;
        }

        .empty-message {
            color: #777;
        }
        </style>
    </head>
    <body>

        <h1>My To-Do List</h1>

        <h2>Current Items</h2>
        <ul>
            @if(empty($todos))
            <li class="empty-message">Your To-Do list is empty!</li>
            @else
            <li>Example Task 1 (Static)</li>
            <li>Example Task 2 (Static)</li>
            @endif
        </ul>


        <div class="add-form">
            <h2>Add New To-Do</h2>
            <form>
                <input type="text" name="description" placeholder="Enter new task description..." required>
                <button type="submit">Add Task</button>
            </form>
        </div>

    </body>
</html>