@extends('index')
@section('content')
    <div class="col-md-9">
        <div class="ask-question-input-part032">
            <h4>Ask Question</h4>
            <hr>
            <form>
                <div class="username-part940">
                    <span class="form-description43">User name* </span><input type="text" name="fname" class="username029" placeholder="Enter your Name">  
                </div>
                <div class="email-part320">
                    <span class="form-description442">E-Mail* </span><input type="text" name="fname" class="email30" placeholder="Enter Your Email">  
                </div>
                <div class="question-title39">
                    <span class="form-description433">Question-Title* </span><input type="text" name="fname" class="question-ttile32" placeholder="Write Your Question Title">
                </div> 
                <div class="categori49">
                    <span class="form-description43305">Category* </span>
                    <label>
                    <input list="browsers" name="myBrowser" class="list-category53"/></label>
                    <datalist id="browsers">
                    <option value="Front_End Web Developer">
                    <option value="Back-End develoer">
                    <option value="Andriod Developer">
                    <option value="Web Application">
                    <option value="System Analyst">
                    <option value="Security">
                    </datalist>
                </div>
                <div class="button-group-addfile3239">
                    <span class="form-description23993">Attactment*</span><input type="file" name="ffile" class="question-ttile3226">
                </div>
                <div class="details2-239">
                    <div class="col-md-12 nopadding">
                        <textarea id="txtEditor"></textarea> 
                    </div>
                </div>	
            </form>
            <div class="publish-button2389">
                <button type="button" class="publis1291">Publish your Question</button>
            </div>
        </div>
    </div>
@endsection
