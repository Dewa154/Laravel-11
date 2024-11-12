<div>
    <h1>User View Page</h1>
    {{print_r($data)}}

    <ul>
        <li>
            <span>Name:</span> <span><b>{{$data->name}}</b></span>
        </li>
        <li>
            <span>Name:</span> <span><b>{{$data->username}}</b></span>
        </li>
        <li>
            <span>Name:</span> <span><b>{{$data->email}}</b></span>
        </li>
        <li>
            <span>Name:</span> <span><b>{{$data->website}}</b></span>
        </li>
        <li>
            <span>Name:</span> <span><b>{{$data->phone}}</b></span>
        </li>
    </ul>
</div>
