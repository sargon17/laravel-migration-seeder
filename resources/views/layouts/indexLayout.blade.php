<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>Document</title>
</head>
<body>
    <div>
        <table>
            <tr>
                <th>
                    ID
                </th>
                <th>
                    train to
                </th>
                <th>
                    train from
                </th>
                <th>
                    duration
                </th>
                <th>
                    depart time
                </th>
                <th>
                    arrive time
                </th>
                <th>
                    company name
                </th>
                <th>
                    status
                </th>
                <th>
                    delay
                </th>
            </tr>
            @yield('trains_info')
        </table>

    </div>


</body>
</html>
