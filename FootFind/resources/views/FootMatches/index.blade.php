<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Gestione Partite</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 20px;
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0,0,0,0.05);
        }

        thead {
            background-color: #2c3e50;
            color: #fff;
            text-transform: uppercase;
            font-size: 13px;
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #e1e4e8;
        }

        tbody tr:hover {
            background-color: #f6f8fa;
        }

        tbody tr:nth-child(even) {
            background-color: #f9fafb;
        }

        .badge {
            padding: 4px 10px;
            border-radius: 12px;
            font-size: 12px;
            font-weight: 600;
            color: #fff;
            text-transform: uppercase;
        }

        .open { background-color: #28a745; }
        .closed { background-color: #dc3545; }

        .boolean-yes {
            color: #28a745;
            font-weight: bold;
        }

        .boolean-no {
            color: #dc3545;
            font-weight: bold;
        }

        .actions button {
            background: none;
            border: none;
            cursor: pointer;
            padding: 4px 8px;
            margin-right: 5px;
            border-radius: 4px;
            font-size: 12px;
            transition: 0.2s;
        }

        .actions .edit {
            color: #fff;
            background-color: #007bff;
        }

        .actions .edit:hover {
            background-color: #0056b3;
        }

        .actions .delete {
            color: #fff;
            background-color: #dc3545;
        }

        .actions .delete:hover {
            background-color: #a71d2a;
        }

        @media (max-width: 1200px) {
            th, td { font-size: 12px; padding: 10px; }
        }

        @media (max-width: 768px) {
            table {
                display: block;
                overflow-x: auto;
            }
        }
    </style>
</head>
<body>

<h2>Gestione Partite</h2>

@section('content')
    
@endsection
<table>
    <thead>
        <tr>
            <th>Title</th>
            <th>City</th>
            <th>Province</th>
            <th>Field Name</th>
            <th>Field Type</th>
            <th>Address</th>
            <th>Date & Time</th>
            <th>Match Type</th>
            <th>Max Players</th>
            <th>Needed Players</th>
            <th>Role Needed</th>
            <th>Seeking Opponent</th>
            <th>Created By</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($matches as $match)
        <tr>
            <td>{{ $match->title }}</td>
            <td>{{ $match->city }}</td>
            <td>{{ $match->province }}</td>
            <td>{{ $match->field_name }}</td>
            <td>{{ $match->field_type }}</td>
            <td>{{ $match->address }}</td>
            <td>{{ $match->date_time }}</td>
            <td><span class="badge {{ $match->match_type }}">{{ $match->match_type }}</span></td>
            <td>{{ $match->max_players }}</td>
            <td>{{ $match->needed_players ?? '-' }}</td>
            <td>{{ $match->role_needed ?? '-' }}</td>
            <td class="{{ $match->seeking_opponent ? 'boolean-yes' : 'boolean-no' }}">
                {{ $match->seeking_opponent ? 'Yes' : 'No' }}
            </td>
            <td>{{ $match->created_by }}</td>
            <td class="actions">
                <button class="edit">Edit</button>
                <button class="delete">Delete</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>