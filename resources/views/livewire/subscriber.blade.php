<div class="wrap-footer-item footer-item-second">
    <h3 class="item-header">Sign up for newsletter</h3>
    <div class="item-content">
        <div class="wrap-newletter-footer">
            <form wire:submit.prevent="addToSubscribe()" class="frm-newletter" id="frm-newletter">
                <input wire:model="email" type="email" class="input-email" value=""
                    placeholder="Enter your email address">
                <button class="btn-submit">Subscribe</button>
            </form>


            @if(Session::has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
            @endif
        </div>
    </div>
</div>