@extends('admin.layout.app')
@section('content')

<div class="container">
    <form method="post" action="{{route('add_paper')}}">
        @csrf
      <h2>Add New Course</h2>

      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="year">Year</label>
          <div>
            <select name="year" style="display: block;width: 100%;height: calc(1.5em + .75rem + 2px);padding: .375rem .75rem;font-size: 1rem;font-weight: 400;line-height: 1.5;color: #6e707e;background-color: #fff;background-clip: padding-box;border: 1px solid #d1d3e2;border-radius: .35rem;transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;">
                <option>- Year -</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
                <option value="2024">2024</option>
                <option value="2025">2025</option>
                <option value="2026">2026</option>
                <option value="2027">2027</option>
                <option value="2028">2028</option>
                <option value="2029">2029</option>
                <option value="2030">2030</option>
                <option value="2031">2031</option>
                <option value="2032">2032</option>
                <option value="2033">2033</option>
                <option value="2034">2034</option>
                <option value="2035">2035</option>
                <option value="2036">2036</option>
                <option value="2037">2037</option>
                <option value="2038">2038</option>
                <option value="2039">2039</option>
                <option value="2040">2040</option>
            </select>
          </div>
            {{-- <input type="text" name="year" class="form-control" placeholder="Enter Year"> --}}
          </div>
        </div>
        <!--  col-md-6   -->

        <div class="col-md-6">
          <div class="form-group">
            <label for="degree">Degree Name</label>
            <input type="text" name="degree" class="form-control" placeholder="Enter Degree Title">
          </div>
        </div>
        <!--  col-md-6   -->
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="semester">Semester</label>
            <input type="text" name="semester" class="form-control" placeholder="Enter Semester">
          </div>

        </div>
        <!--  col-md-6   -->

        <div class="col-md-6">

          <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" name="subject" class="form-control" placeholder="Enter Subject Name">
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
            <input type="text" class="form-control" name="question_1" placeholder="Question No. 1">
          </div>
        </div>

        <div class="col-md-3">

            <div class="form-group">
              <label for="question_1">Total Marks</label>
              <input type="text" class="form-control" name="marks_1" placeholder="Enter Marks">
            </div>
          </div>
      </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="answer_1">Answer No. 1</label>
                    <textarea class="form-control" name="answer_1" placeholder="Answer......"></textarea>
                </div>
            </div>
        </div>
        <hr>

      <div class="row">
        <div class="col-md-3">

          <div class="form-group">
            <label for="question_2">Question No. 2</label>
            <input type="text" class="form-control" name="question_2" placeholder="Question No. 2">
          </div>
        </div>

        <div class="col-md-3">

            <div class="form-group">
              <label for="question_2">Total Marks</label>
              <input type="text" class="form-control" name="marks_2" placeholder="Enter Marks">
            </div>
          </div>



      </div>
<div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="answer_2">Answer No. 2</label>
          <textarea class="form-control" name="answer_2" placeholder="Answer......"></textarea>
        </div>

      </div>
    </div>

    <hr>

      <div class="row">
        <div class="col-md-3">

          <div class="form-group">
            <label for="question_3">Question No. 3</label>
            <input type="text" class="form-control" name="question_3"  placeholder="Question No. 3">
          </div>
        </div>

        <div class="col-md-3">

            <div class="form-group">
              <label for="question_3">Total Marks</label>
              <input type="text" class="form-control" name="marks_3"  placeholder="Enter Marks">
            </div>
          </div>

      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="answer_3">Answer No. 3</label>
            <textarea class="form-control" name="answer_3" placeholder="Answer......"></textarea>
          </div>

        </div>

      </div>
      <hr>
<div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="last">Total Amount</label>
          <input type="number" name="price" class="form-control" placeholder="Enter Total Amount for the course">
        </div>
      </div>
</div>



      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

@endsection
