<x-layout>

    <h2>Registration</h2>
    <br>
    <form action="/subjects" method="post">


        @csrf
        <div>
            <label type="first_name">First Name</label>
            <input type="text" id="first_name" name="first_name">
        </div>
        <br>

        <div>
            <label type="last_name">Last Name</label>
            <input type="text" id="last_name" name="last_name">
            <br>
        </div>

        <br>
        <div>
            <label for="grade_id">Grade Id</label>
            <select id="grade_id" name="grade_id">
                @foreach ($grades as $k => $v)
                    <option value="{{ $k }}">{{ $v }}</option>
                @endforeach
            </select>
        </div>
        <br>


        <input type="submit" class="btn btn-primary">
        
    </form>
