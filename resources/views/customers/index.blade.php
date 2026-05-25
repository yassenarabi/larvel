<!DOCTYPE html>
<html>
<head>
    <title>All Customers</title>
    <style>
        table { border-collapse: collapse; width: 80%; margin: 20px auto; }
        th, td { border: 1px solid #ddd; padding: 12px; text-align: left; }
        th { background-color: #2196F3; color: white; }
        tr:nth-child(even) { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h1 style="text-align: center;">All Customers</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>City</th>
        </tr>
        @foreach($customers as $customer)
        <tr>
            <td>{{ $customer->id }}</td>
            <td>{{ $customer->customerName }}</td>
            <td>{{ $customer->customerEmail }}</td>
            <td>{{ $customer->customerPhone }}</td>
            <td>{{ $customer->customerCity }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>