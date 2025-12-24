<div style="background-color:#f0f0f0; padding:20px; border-radius:10px; display:flex; gap:20px;">

    <!-- LEFT SIDE : TEXT -->
    <div style="flex:1; background-color:#ffffff; padding:20px; border-radius:10px;">
        <h1>
            Welcome to 
            <span style="background-color:yellow; padding:2px 6px;">{{ ucfirst($name) }}</span>'s Profile Page
        </h1>

        <h2>Skills</h2>
        <ul>
            @foreach ($skills as $skill)
                <li>{{ $skill }}</li>
            @endforeach
        </ul>

        <h2>Hobbies</h2>
        <ul>
            @foreach ($hobbies as $hobby)
                <li>{{ $hobby }}</li>
            @endforeach
        </ul>
    </div>

    <!-- RIGHT SIDE : IMAGE -->
    <div style="flex:1; background-color:#ffffff; padding:20px; border-radius:10px; text-align:center;">
        <img 
            src="{{ asset('images/profile.jpg') }}" 
            alt="Profile Image" 
            style="max-width:100%; height:auto; border-radius:10px;"
        >
    </div>

</div>
