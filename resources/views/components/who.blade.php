@if(\Illuminate\Support\Facades\Auth::guard('web')->check())
<p class="text-success">you are login as <strong>USER</strong></p>
    @else
    <p class="text-danger">you are logout as <strong>USER</strong></p>
    @endif

@if(\Illuminate\Support\Facades\Auth::guard('admin')->check())
    <p class="text-success">you are login as <strong>ADMIN</strong></p>
@else
    <p class="text-danger">you are logout as <strong>ADMIN</strong></p>
@endif