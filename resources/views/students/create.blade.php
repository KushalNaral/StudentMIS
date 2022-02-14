
@extends('layouts.app')

@section('content')
    <main id="tt-pageContent">
        <div class="container">
            <div class="tt-wrapper-inner">
                <h1 class="tt-title-border">
                    Create New Data
                </h1>
                <form class="form-default form-create-topic" method="POST" action="/students">
                    @csrf
                    <div class="form-group">
                        <div class="col-md-12 pl-0 pr-0">
                            <div class="form-group">
                                <label for="inputTopicTitle">Faculty</label>
                                <label>
                                    <select class="form-control" name="category_id">
                                        <option value="Select" selected>Select</option>
                                       {{-- @foreach($faculty as $faculty)
                                            <option
                                                value="{{ $faculty->id }}" {{ old('$faculty_id') == $faculty->id ? 'selected' : ''}}>{{ $faculty->title }}</option>
                                        @endforeach--}}
                                    </select>
                                </label>
                            </div>

                            <div class="form-group">
                                <label for="inputTopicTitle">Module</label>
                                <label>
                                    <select class="form-control" name="faculty_id">
                                        <option value="Select" selected>Select</option>
                                        {{-- @foreach($faculty as $faculty)
                                             <option
                                                 value="{{ $faculty->id }}" {{ old('$faculty_id') == $faculty->id ? 'selected' : ''}}>{{ $faculty->title }}</option>
                                         @endforeach--}}
                                    </select>
                                </label>
                            </div>



                        </div>

                    </div>
                    <div class="form-group">
                        <label for="inputTopicTitle">Lecture Title</label>
                        <div class="tt-value-wrapper">
                            <input type="text" name="title" class="form-control" id="inputTopicTitle"
                                   value="{{ old('lecture_name') }}"
                                   placeholder="Subject of your topic">
                        </div>

                    </div>
                    <div class="pt-editor">
                        <h6 class="pt-title">Topic Body</h6>
                        <div class="form-group">
                            <label>
                                    <textarea name="body" class="form-control" rows="5"
                                         placeholder="Lets get started">{{ old('body') }}</textarea>
                            </label>

                        </div>
                        <div class="row">
                            <div class="col-auto ml-md-auto">
                                <button type="submit" class="btn btn-secondary btn-width-lg">Create Post</button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </main>
@endsection

