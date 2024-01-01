<form>
    <div class="row g-4">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <input type="text" class="form-control" placeholder="Full name" id="firstname">
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12">
            <input type="email" class="form-control" placeholder="Email address" id="exampleInputEmail1"
                aria-describedby="emailHelp">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <input type="number" class="form-control" placeholder="Phone number" id="phone">
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">
            <input type="file" class="form-control" placeholder="Upload resume" id="resume">
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">
            <input type="file" class="form-control" placeholder="Upload coverletter" id="coverletter">
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12">
            <select class="form-select form-select" aria-label="Small select example">
                <option selected>Select state</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12">

            <select class="form-select form-select" aria-label="Small select example">
                <option selected>Select Role</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>

        <div class="col-12">

            <div class="row gx-5" style="padding-left: 1.4rem">
                <div class="form-check col-lg-5 col-md-6 col-sm-6">
                    <input class="form-check-input" type="checkbox" value="" id="regional">
                    <label class="form-check-label" for="regional">
                        Regionally
                    </label>
                </div>
                <div class="form-check col-lg-5 col-md-6 col-sm-6 resMt1">
                    <input class="form-check-input" type="checkbox" value="" id="nonregional" checked>
                    <label class="form-check-label" for="nonregional">
                        Non regionally only
                    </label>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btnSecondary" style="border-radius: 2px">Submit</button>

    </div>
</form>
