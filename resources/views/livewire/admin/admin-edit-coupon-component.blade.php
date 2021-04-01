<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Edit Coupon
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('admin.coupons') }}" class="btn btn-success">All Coupons</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="panel-body">
                            @if (Session::has('message'))
                                <div class="alert alert-success" role="alert"><p>{{ Session::get('message') }}</p></div>                                
                            @endif
                        </div>
                        <form class="form-horizontal" wire:submit.prevent="updateCoupon">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Coupon Code</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Coupon code" class="form-control input-md" wire:model="code">
                                    @error('name') <p class="text-danger">{{ $message }}</p> @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Coupon Type</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model="type">
                                        <option value="">select</option>
                                        <option value="fixed">Fixed</option>
                                        <option value="percent">Percent</option>
                                    </select>
                                    @error('name') <p class="text-danger">{{ $message }}</p> @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Coupon value</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Coupon Value" class="form-control input-md" wire:model="value">
                                    @error('name') <p class="text-danger">{{ $message }}</p> @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Coupon Cart Value</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Coupon Cart Value" class="form-control input-md" wire:model="cart_value">
                                    @error('name') <p class="text-danger">{{ $message }}</p> @enderror
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
