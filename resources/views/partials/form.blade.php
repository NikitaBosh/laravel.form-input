<div class="row">
    <div class="col col-md-10 offset-md-1 col-lg-8 offset-lg-2
    col-xl-6 offset-xl-3">
    <form>
        <div class="border">
            <div class="m-3">
            <div class="form-group">
                <label for="exampleInputText">
                    Example Text input
                </label>
                <input type="text" class="form-control" id="exampleInputText" placeholder="Input Text"
                name="exampleInputText" value="{{ $exampleInputText ?? old('exampleInputText')}}">
                <small id="inputTextHelp" class="form-text text-muted">
                    Block-level help text in forms
                </small>
            </div>

            <div class="form-group">
                <label for="exampleTextarea">Example textarea</label>
                <textarea class="form-control" id="exampleTextarea" rows="3"
                name="exampleTextarea">{{ $exampleTextarea ?? old('exampleTextarea', '') }}</textarea>
            </div>

            <div class="form-group">
                <label for="exampleSelect">Example Select</label>
                <select class="custom-select" id="exampleSelect" name="exampleSelect">
                    <option value="1" {{ (($exampleSelect ?? old('exampleSelect')) == "1") ? "selected" : "" }}>
                        One
                    </option>
                    <option value="2" {{ (($exampleSelect ?? old('exampleSelect')) == "2") ? "selected" : "" }}>
                        Two
                    </option>
                    <option value="3" {{ (($exampleSelect ?? old('exampleSelect')) == "3") ? "selected" : "" }}>
                        Three
                    </option>
                </select>
            </div>

            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="exampleCheckbox1" name="exampleCheckbox1"
                    {{ (($exampleCheckbox1 ?? old('exampleCheckbox1')) == "on") ? "checked" : "" }}>
                    <label class="form-check-label" for="exampleCheckbox1">
                        Example checkbox 1
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="exampleCheckbox2" value="2"
                    {{ (($exampleCheckbox2 ?? old('exampleCheckbox2')) == "2") ? "checked" : "" }}>
                    <label class="form-check-label" for="exampleCheckbox2">
                        Example checkbox 2
                    </label>
                </div>
            </div>

            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="exampleRadio1" name="exampleRadio" value="1"
                    {{ (($exampleRadio ?? old('exampleRadio')) == "1") ? "checked" : "" }}>
                    <label class="form-check-label" for="exampleRadio1">
                        Example radio 1
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="exampleRadio2" name="exampleRadio" value="2"
                    {{ (($exampleRadio ?? old('exampleRadio')) == "2") ? "checked" : "" }}>
                    <label class="form-check-label" for="exampleRadio2">
                        Example radio 2
                    </label>
                </div>
                <div class="form-check disabled">
                    <input class="form-check-input" type="radio" id="exampleRadio3" name="exampleRadio" value="3"
                    {{ (($exampleRadio ?? old('exampleRadio')) == "3") ? "checked" : "" }}>
                    <label class="form-check-label" for="exampleRadio3">
                        Example radio 3
                    </label>
                </div>
            </div>

            <div class="form-group">
                <label for="exampleRange">
                    Example Range input
                </label>
                <input type="range" min="0" max="10" class="form-control-range" id="exampleRange"
                name="exampleRange" value="{{ $exampleRange ?? old('exampleRange', '')}}">
            </div>

            <div class="form-group">
                <label for="file">Example file input</label>
                <p><input type="file" id="file"></p>
            </div>

            <button class="btn btn-primary btn-block" type="submit">Submit form</button>
        </div>
        </div>
    </form>

</div>
</div>

