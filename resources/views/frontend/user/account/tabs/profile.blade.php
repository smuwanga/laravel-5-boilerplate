<table class="table table-striped table-hover">
    <tr>
        <th>{{ trans('labels.frontend.user.profile.avatar') }}</th>
        <td><img src="{{ $logged_in_user->picture }}" class="user-profile-image" /></td>
    </tr>
    <tr>
        <th>{{ trans('labels.frontend.user.profile.name') }}</th>
        <td>{{ $logged_in_user->name }}</td>
    </tr>
    <tr>
        <th>{{ trans('labels.frontend.user.profile.email') }}</th>
        <td>{{ $logged_in_user->email }}</td>
    </tr>
    <tr>
        <th>{{ trans('Institution') }}</th>
        <td>{{ $logged_in_user->institution}}</td>
    </tr>
    <tr>
        <th>{{ trans('College') }}</th>
        <td>{{ $logged_in_user->college }}</td>
    </tr>
    <tr>
        <th>{{ trans('School') }}</th>
        <td>{{ $logged_in_user->school }}</td>
    </tr>
    <tr>
        <th>{{ trans('Department') }}</th>
        <td>{{ $logged_in_user->department }}</td>
    </tr>
    <tr>
        <th>{{ trans('Student Number') }}</th>
        <td>{{ $logged_in_user->snumber }}</td>
    </tr>
    <tr>
        <th>{{ trans('Research Topic') }}</th>
        <td>{{ $logged_in_user->topic }}</td>
    </tr>

    <tr>
        <th>{{ trans('labels.frontend.user.profile.created_at') }}</th>
        <td>{{ $logged_in_user->created_at }} ({{ $logged_in_user->created_at->diffForHumans() }})</td>
    </tr>
    <tr>
        <th>{{ trans('labels.frontend.user.profile.last_updated') }}</th>
        <td>{{ $logged_in_user->updated_at }} ({{ $logged_in_user->updated_at->diffForHumans() }})</td>
    </tr>
</table>