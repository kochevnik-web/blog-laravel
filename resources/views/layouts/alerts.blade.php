    <div class="mt-5">

        @if(session('success'))
            <div class="alert alert-success">
                <ul>
                   {{ session('success') }}
                </ul>
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">
                <ul>
                   {{ session('error') }}
                </ul>
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>