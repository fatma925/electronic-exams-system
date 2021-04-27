@extends('professors.header')
@section('title', 'exam')
@section('subtitle', 'exam')

@section('content')
<div class="exam">
<div>
    <form action="" method="post">
        <table class="table">
            <tr>
                <td>
                <span class="lbl">Start time of exam:</span> 
                </td>
                <td>
                <input type="time" name="stime"> 
                </td>
            </tr>
            <tr>
                <td>
                    <span class="lbl">End time of exam:</span>
                </td>
                <td>
                    <input type="time" name="etime">
                </td>
            </tr>
            <tr>
                <td>
                    <span class="lbl">Number of exam question:</span>
                </td>
                <td>
                    <input type="number" name="e-question">
                </td>
            </tr>
            <tr>
                <td>
                    <label class="lbl">Number of Hard questions:</label>
                </td>
                <td>
                    <input type="number" name="ch-question">
                </td>
            </tr>
           
            <tr>
                <td>
                    <label class="lbl">Number of intermediate questions:</label>
                </td>
                <td>
                    <input type="number" name="i-question">
                </td>
            </tr>
            <tr>
                <td>
                    <label class="lbl">Number of easy questions :</label>
                </td>
                <td>
                    <input type="number" name="es-question">
                </td>
            </tr>
            <tr>
                <td>
                    <label class="lbl">subject title:</label>
                </td>
                <td>
                    <input type="text" name="es-question">
                </td>
            </tr>
        </table>
        <input type="submit" value="submit your exam" class="exam-sub">
    </form>
    {{-- <form action="" method="post"><br>
        <label class="lbl" style="margin-right: 155px">Start time of exam:</label>
        <input type="time" name="stime" id="start"><hr>
        <label class="lbl" style="margin-right: 160px">End time of exam:</label>
        <input type="time" name="etime" id="end"><hr>
        <label class="lbl" style="margin-right: 195px">date of exam:</label>
        <input type="date" name="etime" id="date" style="width: 140px"><hr>
        <label class="lbl" style="margin-right: 100px">Number of exam question:</label>
        <input type="number" name="e-question" id="all"><hr>
        <label class="lbl" style="margin-right: 97px">Number of Hard questions:</label>
        <input type="number" name="ch-question" id="hard"><hr>
        <label class="lbl" style="margin-right: 97px">Number of Easy questions :</label>
        <input type="number" name="h-question" id="easy"><hr>
        <label class="lbl" style="margin-right: 40px">Number of intermediate questions :</label>
        <input type="number" name="i-question" id="mid"><hr>
        <!--<label class="lbl" style="margin-right: 216px" id="sub">subject title :</label>
        <input type="text" name="es-question" style="width: 140px"><hr>-->
        <input type="submit" value="submit your exam" class="exam-sub" style="margin-left: 14px;width: 63%" onclick="addexam()">
    </form> --}}
</div>
</div>
@endsection