
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editCategory{{$category->id}}">
<i class="fa fa-edit"></i>
</button>


<!-- Modal -->
<div class="modal fade" id="editCategory{{$category->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('update.category')}}" method="POST">
                {{ method_field('PUT') }}
                    @csrf

                    <input type="hidden" name="id" value="{{$category->id}}">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" name="name" value="{{$category->name}}"
                        class="form-control"  aria-describedby="emailHelp"
                            placeholder="Name">

                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Name_ar</label>
                        <input type="text" name="name_ar" class="form-control" value="{{$category->name_ar}}"  aria-describedby="emailHelp"
                            placeholder="Name_ar">

                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">description</label>
                        <textarea name="description"   value="{{$category->description}}" class="form-control" 
                            cols="30" rows="5"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">description_ar</label>
                        <textarea name="description_ar"  value="{{$category->description_ar}}"  class="form-control" 
                            cols="30" rows="5"></textarea>
                    </div>

                    <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('dashboard.Close')}}</button>
                <button type="submit" class="btn btn-primary">{{__('dashboard.store')}}</button>
            </div>
                </form>
            </div>
          
        </div>
    </div>
</div>
