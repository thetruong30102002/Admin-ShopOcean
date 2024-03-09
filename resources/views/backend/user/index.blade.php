<div class="content-wrapper">
    @include('backend.user.components.breadcrumb',['title'=>$config['seo']['index']['title']])
    @include('backend.user.components.filter')
    @include('backend.user.components.table',['tableHeading'=>$config['seo']['index']['tableHeading']])
</div>
