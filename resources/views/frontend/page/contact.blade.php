@extends('frontend.leyout.main')

@section('title', 'Contact')

@section('content')
    <div class="album py-5 bg-light">
        <div class="container">
<div class="card text-center" style="color: red; font-weight: bold; background-color: rgba(255,222,236,0.57)">
    <h2> নিচে আপনার তথ্য দিন </h2>
</div>
            <form method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="formGroupExampleInput">আপনার নাম</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" name="name" required>
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">আপনার মোবাইল</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" name="mobile" required>
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">আপনার ইমেইল</label>
                    <input type="email" class="form-control" id="formGroupExampleInput2" name="email" required>
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">আপনার ওয়েবসইটের লিকং</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" name="web_link" required>
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">আপনার ওয়েবসইটের লোগো</label>
                    <input type="file" class="form-control" id="formGroupExampleInput2" name="logo" required>
                </div>
                <button type="submit" class="btn btn-block btn-danger btn-round">Send</button>
            </form>

        </div>
    </div>

@endsection
