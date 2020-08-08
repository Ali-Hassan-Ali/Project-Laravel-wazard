

<!-- add matrial  Modal -->
<div class="modal fade" id="elegantModalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <!--Content-->
        <div class="modal-content form-elegant">
            <!--Header-->
            <div class="modal-header text-center">
                <h3 class="modal-title w-100 dark-grey-text font-weight-bold" id="myModalLabel"><strong>Add Material</strong></h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!--Body-->
            <div class="modal-body mx-4">
                <!--Body-->
                <div class="md-form mb-5">
                    <label data-error="wrong" data-success="right">Course Name</label>
                    <input type="text" id="course_name" class="form-control validate" placeholder="Angular - The Complete Guide (2020 Edition)/">
                </div>
                <div class="md-form mb-5">
                    <label data-error="wrong" data-success="right">Add Link</label>
                    <input type="email" id="course_link" class="form-control validate" placeholder="https://www.udemy.com/courses/development/">
                </div>
                <div class="md-form mb-5">
                    <label data-error="wrong" data-success="right">Add Image</label>
                    <input type="file" id="course_img" name="img" accept="image/*" style="height: auto" class="form-control validate">
                </div>
                <div class="md-form mb-5">
                    <label data-error="wrong" data-success="right">Add Discription</label>
                    <textarea type="text" id="course_disc" class="form-control validate" placeholder="This course starts from scratch, you neither need to know Angular 1 nor Angular 2!">
                            </textarea>
                </div>
                <div class="text-center mb-3">
                    <button type="button" class="btn material-btn">Submit</button>
                </div>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!--  add material Modal -->

<!-- modal information -->
<div class="modal fade" id="information_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="max-width: 650px !important;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Information </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="modal-body mx-4">
                    <!--Body-->
                    <div class="row">
                        <div class="col-6 md-form mb-2">
                            <label data-error="wrong" data-success="right"> Name</label>
                            <input type="text" id="first_name" class="form-control validate">
                        </div>
                        <div class="col-6 md-form mb-2">
                            <label data-error="wrong" data-success="right"> Email</label>
                            <input type="email" id="first_email" class="form-control validate">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 md-form mb-2">
                            <label data-error="wrong" data-success="right"> Phone1</label>
                            <input type="number" id="first_email" class="form-control validate">
                        </div>

                        <div class="col-6 md-form mb-2">
                            <label data-error="wrong" data-success="right"> Phone2</label>
                            <input type="number" id="first_email" class="form-control validate">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 md-form mb-2">
                            <label data-error="wrong" data-success="right"> Phone3</label>
                            <input type="number" id="first_email" class="form-control validate">
                        </div>

                        <div class="col-6 md-form mb-2">
                            <label data-error="wrong" data-success="right">Location</label>
                            <input type="url" id="first_email" class="form-control validate">
                        </div>
                    </div>
                    <div class="md-form mb-2">
                        <label data-error="wrong" data-success="right">brief Details*</label><textarea maxlength="70" rows="3" cols="40" type="text" id="" class="form-control validate" spellcheck="false" placeholder="write details max words 70word"></textarea>
                    </div>
                    <div class="md-form mb-2">
                        <label data-error="wrong" data-success="right">Details intro*</label>
                        <textarea maxlength="70" rows="3" cols="40" type="text" id="" class="form-control validate" spellcheck="false" placeholder="write details max words 100word"></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary"  onClick="window.location.reload();">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!-- End Modal information -->

<!-- modal About -->
<div class="modal fade" id="about_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="aboutpheader">About </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="modal-body mx-4">
                    <!--Body-->
                    <div class="md-form mb-2">
                        <label data-error="wrong" data-success="right">Resume</label>
                        <textarea type="text" id="about_disc" class="form-control validate"></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary"  onClick="window.location.reload();">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!-- End Modal information -->

<!-- modal  contact info -->
<div class="modal fade" id="contactinfo_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="max-width: 650px !important;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="contact_header">Contact Info </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="modal-body mx-4">
                    <!--Body-->
                    <div class="row">
                        <div class="col-6 md-form mb-2">
                            <label data-error="wrong" data-success="right">Country</label>
                            <input type="text" id="country" class="form-control validate">
                        </div>
                        <div class="col-6 md-form mb-2">
                            <label data-error="wrong" data-success="right">Date of Birth</label>
                            <input type="date" id="date_birth" class="form-control validate">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6 md-form mb-2">
                            <label data-error="wrong" data-success="right">M Phone1</label>
                            <input type="number" id="phone_1" class="form-control validate">
                        </div>
                        <div class="col-6 md-form mb-2">
                            <label data-error="wrong" data-success="right">M Phone2</label>
                            <input type="number" id="phone_2" class="form-control validate">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 md-form mb-2">
                            <label data-error="wrong" data-success="right">Upload CV1</label>
                            <input type="file" id="cv_one" name="img" accept="*/*" style="height: auto" class="form-control validate">
                        </div>
                        <div class="col-lg-6 md-form mb-2">
                            <label data-error="wrong" data-success="right">Upload CV2</label>
                            <input type="file" id="cv_two" accept="*/*" style="height: auto" class="form-control validate">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 md-form mb-2">
                            <label data-error="wrong" data-success="right">Upload CV3</label>
                            <input type="file" id="cv_three" name="img" accept="*/*" style="height: auto" class="form-control validate">
                        </div>
                        <div class="col-lg-6 md-form mb-2">
                            <label data-error="wrong" data-success="right">Upload CV4</label>
                            <input type="file" id="cv_four" accept="*/*" style="height: auto" class="form-control validate">
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary"  onClick="window.location.reload();">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!-- End Modal contact info -->

<!-- modal  org info -->
<div class="modal fade" id="org-profile_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="max-width: 650px !important;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="org_header">org Info </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="modal-body mx-4">
                    <!--Body-->
                    <div class="row">
                        <div class="col-6 md-form mb-2">
                            <label data-error="wrong" data-success="right">Name</label>
                            <input type="text" id="country" class="form-control validate" disabled>
                        </div>
                        <div class="col-6 md-form mb-2">
                            <label data-error="wrong" data-success="right">ID</label>
                            <input type="date" id="date_birth" class="form-control validate" disabled>
                        </div>
                        <div class="col-12 md-form mb-2">
                            <label data-error="wrong" data-success="right">Description</label>
                            <textarea type="text" id="about_disc" class="form-control validate"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary"  onClick="window.location.reload();">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!-- End Modal contact info -->

<div class="modal fade show" id="add_image_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="padding-right: 17px;" aria-modal="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="aboutpheader">About </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="modal-body mx-4">
                    <!--Body-->
                    <div class="md-form mb-2">
                        <label data-error="wrong" data-success="right">Add Image</label>
                        <input type="file" accept="*/*" id="about_disc" class="form-control validate" />
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="window.location.reload();">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- Delet modal-->
<!-- Modal HTML -->
<div id="delete_Modal" class="modal fade">
    <div class="modal-dialog modal-confirm">
        <div class="modal-content">
            <div class="modal-header flex-column">
                <div class="icon-box">
                    <i class="fa fa-close"></i>
                </div>
                <h4 class="modal-title w-100">Are you sure?</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <p>Do you really want to delete these records? This process cannot be undone.</p>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger">Delete</button>
            </div>
        </div>
    </div>
</div>
<!-- The Loader. Is shown when pjax happens -->
<div class="loader-wrap hiding hide">
    <i class="fa fa-circle-o-notch fa-spin-fast"></i>
</div>

<!-- common libraries. required for every page-->
