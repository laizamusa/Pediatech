@extends('layouts.master')

@section('content')
    <div class="section " id="section0">
        <div class="container bdb">
            <nav class="navbar navbar-toggleable-md">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="/"><img style="height: 80px; /*margin-left: 120px;*/margin-left: 133px;"  src="/img/logo.png"></a>
                <div class="collapse navbar-collapse row" id="navbarCollapse">
                    <ul class="navbar-nav col-4">
                    </ul>
                    <ul class="navbar-nav col-8 text-center">
                        <li class="nav-item active col-3">
                            <a class="nav-link" href="/about">About Us</a>
                        </li>
                        <li class="nav-item col-3">
                            <a class="nav-link" href="/tech">Technologies</a>
                        </li>
                        <li class="nav-item col-3">
                            <a class="nav-link" href="/org">Our Organization</a>
                        </li>
                        <li class="nav-item col-3">
                            <a class="nav-link" href="/contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <div class="intro">
            <div class="row">
                <div style="margin-top: 100px;">
                    <h1 style="margin-left: 47%; color:#696969; font-size: 53px; font-family: AvantGarde Md BT;"><b>SEND US A MESSAGE</b></h1>
                    <p style="margin-left: 60%; color:#696969; font-size: 18px;">We want to hear from you.</p>
                </div>
                <div role="form" class="wpcf7" id="wpcf7-f4-p39-o1" dir="ltr" lang="en-US">
                    <div class="screen-reader-response"></div>
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <input type="file" id="exampleInputFile">
                            <p class="help-block">Example block-level help text here.</p>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Check me out
                            </label>
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                    </div>
            </div>
        </div>

    </div>