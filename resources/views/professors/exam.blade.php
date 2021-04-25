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
                    <label class="lbl">Number of every chapter questions:</label>
                </td>
                <td>
                    <input type="number" name="ch-question">
                </td>
            </tr>
            <tr>
                <td>
                    <label class="lbl">Number of hard questions of every chapter:</label>
                </td>
                <td>
                    <input type="number" name="h-question">
                </td>
            </tr>
            <tr>
                <td>
                    <label class="lbl">Number of intermediate questions of every chapter:</label>
                </td>
                <td>
                    <input type="number" name="i-question">
                </td>
            </tr>
            <tr>
                <td>
                    <label class="lbl">Number of easy questions of every chapter:</label>
                </td>
                <td>
                    <input type="number" name="es-question">
                </td>
            </tr>
        </table>
        <input type="submit" value="submit your exam" class="exam-sub">
    </form>
</div>
</div>
@endsection