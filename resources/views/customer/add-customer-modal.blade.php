<div class="modal fade" id="addCustomerModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-info"><i class="fa fa-edit"></i>
                    Add new customer</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form action="{{ route('customer.store') }}" method="post">
                @csrf
                <div class="modal-body p-4">
                    <div class="form-group">
                        <label>First name:</label>
                        <input class="form-control"
                               placeholder="Enter a first name..." name="firstname" type="text">
                    </div>
                    <div class="form-group mt-2">
                        <label>Last name:</label>
                        <input class="form-control"
                               placeholder="Enter a last name..." name="lastname" type="text">
                    </div>
                    <div class="form-group mt-4">
                        <label>Is commercial:</label>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="is_commercial" value="0"
                                   checked>
                            <label class="form-check-label" for="radio1">no</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="is_commercial" value="1">
                            <label class="form-check-label" for="radio2">yes</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-block bg-info m-2" style="width: 35%">
                        submit
                    </button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                        Close
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
