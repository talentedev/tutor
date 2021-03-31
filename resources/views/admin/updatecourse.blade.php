@extends('admin.layout.app')
@section('content')

<div class="container">
    <form method="post" action="{{route('updatecourse')}}">
        <input type="hidden" name="id" value="{{$user->id}}">
        @csrf
      <h2>Update Existing Course</h2>

      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="year">Year</label>
          <div>
            <select name="year" style="display: block;width: 100%;height: calc(1.5em + .75rem + 2px);padding: .375rem .75rem;font-size: 1rem;font-weight: 400;line-height: 1.5;color: #6e707e;background-color: #fff;background-clip: padding-box;border: 1px solid #d1d3e2;border-radius: .35rem;transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;">
                <option>- Year -</option>
                <option value="2020" @if($user->year == "2020") selected @endif>2020</option>
                <option value="2021" @if($user->year == "2021") selected @endif>2021</option>
                <option value="2022" @if($user->year == "2022") selected @endif>2022</option>
                <option value="2023" @if($user->year == "2023") selected @endif>2023</option>
                <option value="2024" @if($user->year == "2024") selected @endif>2024</option>
                <option value="2025" @if($user->year == "2025") selected @endif>2025</option>
                <option value="2026" @if($user->year == "2026") selected @endif>2026</option>
                <option value="2027" @if($user->year == "2027") selected @endif>2027</option>
                <option value="2028" @if($user->year == "2028") selected @endif>2028</option>
                <option value="2029" @if($user->year == "2029") selected @endif>2029</option>
                <option value="2030" @if($user->year == "2030") selected @endif>2030</option>
                <option value="2031" @if($user->year == "2031") selected @endif>2031</option>
                <option value="2032" @if($user->year == "2032") selected @endif>2032</option>
                <option value="2033" @if($user->year == "2033") selected @endif>2033</option>
                <option value="2034" @if($user->year == "2034") selected @endif>2034</option>
                <option value="2035" @if($user->year == "2035") selected @endif>2035</option>
                <option value="2036" @if($user->year == "2036") selected @endif>2036</option>
                <option value="2037" @if($user->year == "2037") selected @endif>2037</option>
                <option value="2038" @if($user->year == "2038") selected @endif>2038</option>
                <option value="2039" @if($user->year == "2039") selected @endif>2039</option>
                <option value="2040" @if($user->year == "2040") selected @endif>2040</option>
            </select>
          </div>
            {{-- <input type="text" name="year" class="form-control" placeholder="Enter Year"> --}}
          </div>
        </div>
        <!--  col-md-6   -->

        <div class="col-md-6">
          <div class="form-group">
            <label for="degree">Degree Name</label>
            <input type="text" name="degree" value="{{$user->degree}}" class="form-control" placeholder="Enter Degree Title">
          </div>
        </div>
        <!--  col-md-6   -->
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="semester">Semester</label>
            <input type="text" name="semester" value="{{$user->semester}}" class="form-control" placeholder="Enter Semester">
          </div>

        </div>
        <!--  col-md-6   -->

        <div class="col-md-6">

          <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" name="subject" value="{{$user->subject}}" class="form-control" placeholder="Enter Subject Name">
          </div>
        </div>
        <!--  col-md-6   -->
      </div>
      <!--  row   -->
<hr>
      <div class="row">
        <div class="col-md-3">

          <div class="form-group">
            <label for="question_1">Question No. 1</label>
            <input type="text" class="form-control" name="question_1" value="{{$user->question_1}}" placeholder="Question No. 1">
          </div>
        </div>

        <div class="col-md-3">

            <div class="form-group">
              <label for="question_1">Total Marks</label>
              <input type="text" class="form-control" name="marks_1" value="{{$user->marks_1}}" placeholder="Enter Marks">
            </div>
          </div>
      </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="answer_1">Answer No. 1</label>
                    <textarea class="form-control" name="answer_1" placeholder="Answer......">{{$user->answer_1}}</textarea>
                </div>
            </div>
        </div>
        <hr>

      <div class="row">
        <div class="col-md-3">

          <div class="form-group">
            <label for="question_2">Question No. 2</label>
            <input type="text" class="form-control" name="question_2" value="{{$user->question_2}}" placeholder="Question No. 2">
          </div>
        </div>

        <div class="col-md-3">

            <div class="form-group">
              <label for="question_2">Total Marks</label>
              <input type="text" class="form-control" name="marks_2" value="{{$user->marks_2}}" placeholder="Enter Marks">
            </div>
          </div>



      </div>
<div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="answer_2">Answer No. 2</label>
          <textarea class="form-control" name="answer_2" placeholder="Answer......">{{$user->answer_2}}</textarea>
        </div>

      </div>
    </div>

    <hr>

      <div class="row">
        <div class="col-md-3">

          <div class="form-group">
            <label for="question_3">Question No. 3</label>
            <input type="text" class="form-control" name="question_3" value="{{$user->question_3}}"  placeholder="Question No. 3">
          </div>
        </div>

        <div class="col-md-3">

            <div class="form-group">
              <label for="question_3">Total Marks</label>
              <input type="text" class="form-control" name="marks_3" value="{{$user->marks_3}}"  placeholder="Enter Marks">
            </div>
          </div>

      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="answer_3">Answer No. 3</label>
            <textarea class="form-control" name="answer_3" placeholder="Answer......">{{$user->answer_3}}</textarea>
          </div>

        </div>

      </div>
      <hr>
<div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="last">Total Amount</label>
          <input type="number" name="price" class="form-control" value="{{$user->price}}" placeholder="Enter Total Amount for the course">
        </div>
      </div>
</div>



      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

@endsection
