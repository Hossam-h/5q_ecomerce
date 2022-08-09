<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteproducts{{$product->id}}" title="">
    <i class="fa fa-trash"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="deleteproducts{{$product->id}}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" 
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title bg-danger text-white" style="padding:7px"   id="exampleModalLongTitle">{{__('dashboard.item_delete')}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('delete.product')}}" method="POST">
                    {{ method_field('delete') }}
                    @csrf

                    <input type="hidden" name="id" value="{{$product->id}}">
                    

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                            data-dismiss="modal">{{__('dashboard.Close')}}</button>
                        <button type="submit" class="btn btn-danger">{{__('dashboard.delete')}}</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>