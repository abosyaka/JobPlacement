<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta charset="UTF-8" />
        <meta
                name="viewport"
                content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
        />
        <title>Admin Panel</title>
        <link
                rel="stylesheet"
                href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
                integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
                crossorigin="anonymous"
        />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    </head>
</head>
<body style="background-color: #ffffff !important;">
<div class="container-fluid px-0 h-100">
    <main>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand text-uppercase col-2" href="home">World news portal</a>

            <div class="collapse navbar-collapse ml-auto col-3" id="navbarSupportedContent">
                <div class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2 pr-5" type="search" placeholder="Search" aria-label="Search">
                    <a href="home">
                        <button class="btn btn-dark my-2 my-sm-0 text-uppercase">Sign Out</button>
                    </a>
                </div>
            </div>
        </nav>
        <div class="d-flex flex-row ">
            <div class="bg-light border-right col-2 h-100" >
                <div class="sidebar-heading mt-4 font-weight-bold text-uppercase">Admin Panel</div>
                <div class="list-group list-group-flush mt-5 font-weight-bold">
                    <a href="languageList" class="list-group-item-action mb-2">Languages</a>
                    <a href="publicationList" class="list-group-item-action mb-2">Publications</a>
                    <a href="compList" class="list-group-item-action">Companies</a>
                    <a href="userList" class="list-group-item-action">Users</a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="modal fade" id="edModal" tabindex="-1" aria-labelledby="edModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="edModalLabel">Edit News</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                </div>
                                <div class="modal-footer">
                                    <form action="/saveNews" class="w-100" method="post"></form>
                                    <p style=" width: 100%;">Title:</p>
                                    <div class="form-group w-100"> <input class="w-100" type="text" name="title" id="t"></div>
                                    <p style=" width: 100%;">Short Content:</p>
                                    <div class="form-group w-100"> <input class="w-100" type="text" name="short_content" id="sc"></div>
                                    <p style=" width: 100%;">Content:</p>
                                    <div class="form-group w-100"> <input class="w-100" type="text" name="content" id="c"></div>
                                    <p style=" width: 100%;">Language:</p>
                                    <div class="form-group w-100">
                                        <select class="form-control" name="language" id="l">

                                            <option value="DEU">Deutsch</option>

                                            <option value="ENG">English</option>

                                            <option value="ITA">Italian</option>

                                            <option value="JAP">Japonglish</option>

                                            <option value="RUS">Russian</option>

                                        </select>
                                    </div>
                                    <p style=" width: 100%;">Publication:</p>
                                    <div class="form-group w-100">
                                        <select class="form-control" name="publication" id="p">

                                            <option value="BBC" selected="">BBC</option>

                                            <option value="CLVDIS" selected="">CLVDIS</option>

                                            <option value="CNN" selected="">CNN</option>

                                            <option value="GESTAPO" selected="">GESTAPO</option>

                                            <option value="RBK" selected="">RBK</option>

                                            <option value="TASS" selected="">TASS</option>

                                        </select>
                                    </div>
                                    <p style=" width: 100%;">Picture URL:</p>
                                    <div class="form-group w-100"> <input class="w-100" type="text" name="picture" id="pu"></div>

                                    <input type="hidden" name="edlid" id="edlid" value="2">
                                    <button type="submit" class="btn btn-danger float-right">SAVE</button>
                                    <button type="submit" name="del" class="btn btn-secondary float-right">DELETE</button>

                                </div>
                            </div>
                        </div>
                    </div><div class="modal fade" id="edModal" tabindex="-1" aria-labelledby="edModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="edModalLabel">Edit News</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">

                            </div>
                            <div class="modal-footer">
                                <form action="/saveNews" class="w-100" method="post"></form>
                                <p style=" width: 100%;">Title:</p>
                                <div class="form-group w-100"> <input class="w-100" type="text" name="title" id="t"></div>
                                <p style=" width: 100%;">Short Content:</p>
                                <div class="form-group w-100"> <input class="w-100" type="text" name="short_content" id="sc"></div>
                                <p style=" width: 100%;">Content:</p>
                                <div class="form-group w-100"> <input class="w-100" type="text" name="content" id="c"></div>
                                <p style=" width: 100%;">Language:</p>
                                <div class="form-group w-100">
                                    <select class="form-control" name="language" id="l">

                                        <option value="DEU">Deutsch</option>

                                        <option value="ENG">English</option>

                                        <option value="ITA">Italian</option>

                                        <option value="JAP">Japonglish</option>

                                        <option value="RUS">Russian</option>

                                    </select>
                                </div>
                                <p style=" width: 100%;">Publication:</p>
                                <div class="form-group w-100">
                                    <select class="form-control" name="publication" id="p">

                                        <option value="BBC" selected="">BBC</option>

                                        <option value="CLVDIS" selected="">CLVDIS</option>

                                        <option value="CNN" selected="">CNN</option>

                                        <option value="GESTAPO" selected="">GESTAPO</option>

                                        <option value="RBK" selected="">RBK</option>

                                        <option value="TASS" selected="">TASS</option>

                                    </select>
                                </div>
                                <p style=" width: 100%;">Picture URL:</p>
                                <div class="form-group w-100"> <input class="w-100" type="text" name="picture" id="pu"></div>

                                <input type="hidden" name="edlid" id="edlid" value="3">
                                <button type="submit" class="btn btn-danger float-right">SAVE</button>
                                <button type="submit" name="del" class="btn btn-secondary float-right">DELETE</button>

                            </div>
                        </div>
                    </div>
                </div><div class="modal fade" id="edModal" tabindex="-1" aria-labelledby="edModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="edModalLabel">Edit News</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">

                            </div>
                            <div class="modal-footer">
                                <form action="/saveNews" class="w-100" method="post"></form>
                                <p style=" width: 100%;">Title:</p>
                                <div class="form-group w-100"> <input class="w-100" type="text" name="title" id="t"></div>
                                <p style=" width: 100%;">Short Content:</p>
                                <div class="form-group w-100"> <input class="w-100" type="text" name="short_content" id="sc"></div>
                                <p style=" width: 100%;">Content:</p>
                                <div class="form-group w-100"> <input class="w-100" type="text" name="content" id="c"></div>
                                <p style=" width: 100%;">Language:</p>
                                <div class="form-group w-100">
                                    <select class="form-control" name="language" id="l">

                                        <option value="DEU">Deutsch</option>

                                        <option value="ENG">English</option>

                                        <option value="ITA">Italian</option>

                                        <option value="JAP">Japonglish</option>

                                        <option value="RUS">Russian</option>

                                    </select>
                                </div>
                                <p style=" width: 100%;">Publication:</p>
                                <div class="form-group w-100">
                                    <select class="form-control" name="publication" id="p">

                                        <option value="BBC" selected="">BBC</option>

                                        <option value="CLVDIS" selected="">CLVDIS</option>

                                        <option value="CNN" selected="">CNN</option>

                                        <option value="GESTAPO" selected="">GESTAPO</option>

                                        <option value="RBK" selected="">RBK</option>

                                        <option value="TASS" selected="">TASS</option>

                                    </select>
                                </div>
                                <p style=" width: 100%;">Picture URL:</p>
                                <div class="form-group w-100"> <input class="w-100" type="text" name="picture" id="pu"></div>

                                <input type="hidden" name="edlid" id="edlid" value="4">
                                <button type="submit" class="btn btn-danger float-right">SAVE</button>
                                <button type="submit" name="del" class="btn btn-secondary float-right">DELETE</button>

                            </div>
                        </div>
                    </div>
                </div><div class="modal fade" id="edModal" tabindex="-1" aria-labelledby="edModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="edModalLabel">Edit News</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">

                            </div>
                            <div class="modal-footer">
                                <form action="/saveNews" class="w-100" method="post"></form>
                                <p style=" width: 100%;">Title:</p>
                                <div class="form-group w-100"> <input class="w-100" type="text" name="title" id="t"></div>
                                <p style=" width: 100%;">Short Content:</p>
                                <div class="form-group w-100"> <input class="w-100" type="text" name="short_content" id="sc"></div>
                                <p style=" width: 100%;">Content:</p>
                                <div class="form-group w-100"> <input class="w-100" type="text" name="content" id="c"></div>
                                <p style=" width: 100%;">Language:</p>
                                <div class="form-group w-100">
                                    <select class="form-control" name="language" id="l">

                                        <option value="DEU">Deutsch</option>

                                        <option value="ENG">English</option>

                                        <option value="ITA">Italian</option>

                                        <option value="JAP">Japonglish</option>

                                        <option value="RUS">Russian</option>

                                    </select>
                                </div>
                                <p style=" width: 100%;">Publication:</p>
                                <div class="form-group w-100">
                                    <select class="form-control" name="publication" id="p">

                                        <option value="BBC" selected="">BBC</option>

                                        <option value="CLVDIS" selected="">CLVDIS</option>

                                        <option value="CNN" selected="">CNN</option>

                                        <option value="GESTAPO" selected="">GESTAPO</option>

                                        <option value="RBK" selected="">RBK</option>

                                        <option value="TASS" selected="">TASS</option>

                                    </select>
                                </div>
                                <p style=" width: 100%;">Picture URL:</p>
                                <div class="form-group w-100"> <input class="w-100" type="text" name="picture" id="pu"></div>

                                <input type="hidden" name="edlid" id="edlid" value="5">
                                <button type="submit" class="btn btn-danger float-right">SAVE</button>
                                <button type="submit" name="del" class="btn btn-secondary float-right">DELETE</button>

                            </div>
                        </div>
                    </div>
                </div><div class="modal fade" id="edModal" tabindex="-1" aria-labelledby="edModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="edModalLabel">Edit News</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">

                            </div>
                            <div class="modal-footer">
                                <form action="/saveNews" class="w-100" method="post"></form>
                                <p style=" width: 100%;">Title:</p>
                                <div class="form-group w-100"> <input class="w-100" type="text" name="title" id="t"></div>
                                <p style=" width: 100%;">Short Content:</p>
                                <div class="form-group w-100"> <input class="w-100" type="text" name="short_content" id="sc"></div>
                                <p style=" width: 100%;">Content:</p>
                                <div class="form-group w-100"> <input class="w-100" type="text" name="content" id="c"></div>
                                <p style=" width: 100%;">Language:</p>
                                <div class="form-group w-100">
                                    <select class="form-control" name="language" id="l">

                                        <option value="DEU">Deutsch</option>

                                        <option value="ENG">English</option>

                                        <option value="ITA">Italian</option>

                                        <option value="JAP">Japonglish</option>

                                        <option value="RUS">Russian</option>

                                    </select>
                                </div>
                                <p style=" width: 100%;">Publication:</p>
                                <div class="form-group w-100">
                                    <select class="form-control" name="publication" id="p">

                                        <option value="BBC" selected="">BBC</option>

                                        <option value="CLVDIS" selected="">CLVDIS</option>

                                        <option value="CNN" selected="">CNN</option>

                                        <option value="GESTAPO" selected="">GESTAPO</option>

                                        <option value="RBK" selected="">RBK</option>

                                        <option value="TASS" selected="">TASS</option>

                                    </select>
                                </div>
                                <p style=" width: 100%;">Picture URL:</p>
                                <div class="form-group w-100"> <input class="w-100" type="text" name="picture" id="pu"></div>

                                <input type="hidden" name="edlid" id="edlid" value="6">
                                <button type="submit" class="btn btn-danger float-right">SAVE</button>
                                <button type="submit" name="del" class="btn btn-secondary float-right">DELETE</button>

                            </div>
                        </div>
                    </div>
                </div><div class="modal fade" id="edModal" tabindex="-1" aria-labelledby="edModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="edModalLabel">Edit News</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">

                            </div>
                            <div class="modal-footer">
                                <form action="/saveNews" class="w-100" method="post"></form>
                                <p style=" width: 100%;">Title:</p>
                                <div class="form-group w-100"> <input class="w-100" type="text" name="title" id="t"></div>
                                <p style=" width: 100%;">Short Content:</p>
                                <div class="form-group w-100"> <input class="w-100" type="text" name="short_content" id="sc"></div>
                                <p style=" width: 100%;">Content:</p>
                                <div class="form-group w-100"> <input class="w-100" type="text" name="content" id="c"></div>
                                <p style=" width: 100%;">Language:</p>
                                <div class="form-group w-100">
                                    <select class="form-control" name="language" id="l">

                                        <option value="DEU">Deutsch</option>

                                        <option value="ENG">English</option>

                                        <option value="ITA">Italian</option>

                                        <option value="JAP">Japonglish</option>

                                        <option value="RUS">Russian</option>

                                    </select>
                                </div>
                                <p style=" width: 100%;">Publication:</p>
                                <div class="form-group w-100">
                                    <select class="form-control" name="publication" id="p">

                                        <option value="BBC" selected="">BBC</option>

                                        <option value="CLVDIS" selected="">CLVDIS</option>

                                        <option value="CNN" selected="">CNN</option>

                                        <option value="GESTAPO" selected="">GESTAPO</option>

                                        <option value="RBK" selected="">RBK</option>

                                        <option value="TASS" selected="">TASS</option>

                                    </select>
                                </div>
                                <p style=" width: 100%;">Picture URL:</p>
                                <div class="form-group w-100"> <input class="w-100" type="text" name="picture" id="pu"></div>

                                <input type="hidden" name="edlid" id="edlid" value="7">
                                <button type="submit" class="btn btn-danger float-right">SAVE</button>
                                <button type="submit" name="del" class="btn btn-secondary float-right">DELETE</button>

                            </div>
                        </div>
                    </div>
                </div><div class="modal fade" id="edModal" tabindex="-1" aria-labelledby="edModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="edModalLabel">Edit News</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">

                            </div>
                            <div class="modal-footer">
                                <form action="/saveNews" class="w-100" method="post"></form>
                                <p style=" width: 100%;">Title:</p>
                                <div class="form-group w-100"> <input class="w-100" type="text" name="title" id="t"></div>
                                <p style=" width: 100%;">Short Content:</p>
                                <div class="form-group w-100"> <input class="w-100" type="text" name="short_content" id="sc"></div>
                                <p style=" width: 100%;">Content:</p>
                                <div class="form-group w-100"> <input class="w-100" type="text" name="content" id="c"></div>
                                <p style=" width: 100%;">Language:</p>
                                <div class="form-group w-100">
                                    <select class="form-control" name="language" id="l">

                                        <option value="DEU">Deutsch</option>

                                        <option value="ENG">English</option>

                                        <option value="ITA">Italian</option>

                                        <option value="JAP">Japonglish</option>

                                        <option value="RUS">Russian</option>

                                    </select>
                                </div>
                                <p style=" width: 100%;">Publication:</p>
                                <div class="form-group w-100">
                                    <select class="form-control" name="publication" id="p">

                                        <option value="BBC" selected="">BBC</option>

                                        <option value="CLVDIS" selected="">CLVDIS</option>

                                        <option value="CNN" selected="">CNN</option>

                                        <option value="GESTAPO" selected="">GESTAPO</option>

                                        <option value="RBK" selected="">RBK</option>

                                        <option value="TASS" selected="">TASS</option>

                                    </select>
                                </div>
                                <p style=" width: 100%;">Picture URL:</p>
                                <div class="form-group w-100"> <input class="w-100" type="text" name="picture" id="pu"></div>

                                <input type="hidden" name="edlid" id="edlid" value="8">
                                <button type="submit" class="btn btn-danger float-right">SAVE</button>
                                <button type="submit" name="del" class="btn btn-secondary float-right">DELETE</button>

                            </div>
                        </div>
                    </div>
                </div><div class="modal fade" id="edModal" tabindex="-1" aria-labelledby="edModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="edModalLabel">Edit News</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">

                            </div>
                            <div class="modal-footer">
                                <form action="/saveNews" class="w-100" method="post"></form>
                                <p style=" width: 100%;">Title:</p>
                                <div class="form-group w-100"> <input class="w-100" type="text" name="title" id="t"></div>
                                <p style=" width: 100%;">Short Content:</p>
                                <div class="form-group w-100"> <input class="w-100" type="text" name="short_content" id="sc"></div>
                                <p style=" width: 100%;">Content:</p>
                                <div class="form-group w-100"> <input class="w-100" type="text" name="content" id="c"></div>
                                <p style=" width: 100%;">Language:</p>
                                <div class="form-group w-100">
                                    <select class="form-control" name="language" id="l">

                                        <option value="DEU">Deutsch</option>

                                        <option value="ENG">English</option>

                                        <option value="ITA">Italian</option>

                                        <option value="JAP">Japonglish</option>

                                        <option value="RUS">Russian</option>

                                    </select>
                                </div>
                                <p style=" width: 100%;">Publication:</p>
                                <div class="form-group w-100">
                                    <select class="form-control" name="publication" id="p">

                                        <option value="BBC" selected="">BBC</option>

                                        <option value="CLVDIS" selected="">CLVDIS</option>

                                        <option value="CNN" selected="">CNN</option>

                                        <option value="GESTAPO" selected="">GESTAPO</option>

                                        <option value="RBK" selected="">RBK</option>

                                        <option value="TASS" selected="">TASS</option>

                                    </select>
                                </div>
                                <p style=" width: 100%;">Picture URL:</p>
                                <div class="form-group w-100"> <input class="w-100" type="text" name="picture" id="pu"></div>

                                <input type="hidden" name="edlid" id="edlid" value="9">
                                <button type="submit" class="btn btn-danger float-right">SAVE</button>
                                <button type="submit" name="del" class="btn btn-secondary float-right">DELETE</button>

                            </div>
                        </div>
                    </div>
                </div><div class="modal fade" id="edModal" tabindex="-1" aria-labelledby="edModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="edModalLabel">Edit News</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">

                            </div>
                            <div class="modal-footer">
                                <form action="/saveNews" class="w-100" method="post"></form>
                                <p style=" width: 100%;">Title:</p>
                                <div class="form-group w-100"> <input class="w-100" type="text" name="title" id="t"></div>
                                <p style=" width: 100%;">Short Content:</p>
                                <div class="form-group w-100"> <input class="w-100" type="text" name="short_content" id="sc"></div>
                                <p style=" width: 100%;">Content:</p>
                                <div class="form-group w-100"> <input class="w-100" type="text" name="content" id="c"></div>
                                <p style=" width: 100%;">Language:</p>
                                <div class="form-group w-100">
                                    <select class="form-control" name="language" id="l">

                                        <option value="DEU">Deutsch</option>

                                        <option value="ENG">English</option>

                                        <option value="ITA">Italian</option>

                                        <option value="JAP">Japonglish</option>

                                        <option value="RUS">Russian</option>

                                    </select>
                                </div>
                                <p style=" width: 100%;">Publication:</p>
                                <div class="form-group w-100">
                                    <select class="form-control" name="publication" id="p">

                                        <option value="BBC" selected="">BBC</option>

                                        <option value="CLVDIS" selected="">CLVDIS</option>

                                        <option value="CNN" selected="">CNN</option>

                                        <option value="GESTAPO" selected="">GESTAPO</option>

                                        <option value="RBK" selected="">RBK</option>

                                        <option value="TASS" selected="">TASS</option>

                                    </select>
                                </div>
                                <p style=" width: 100%;">Picture URL:</p>
                                <div class="form-group w-100"> <input class="w-100" type="text" name="picture" id="pu"></div>

                                <input type="hidden" name="edlid" id="edlid" value="10">
                                <button type="submit" class="btn btn-danger float-right">SAVE</button>
                                <button type="submit" name="del" class="btn btn-secondary float-right">DELETE</button>

                            </div>
                        </div>
                    </div>
                </div><table class="table">
                    <thead>
                    <tr class="card-title">
                        <th>ID</th>
                        <th>TITLE</th>
                        <th>LANGUAGE</th>
                        <th>ADDED DATE</th>
                        <th>PUBLICATION</th>
                        <th>DETAILS</th>
                        <th>OPERATIONS</th>
                    </tr>
                    </thead>

                    <tbody><tr>
                        <td>
                            2
                        </td>
                        <td>
                            Lorem ipsum
                        </td>
                        <td>
                            English
                        </td>
                        <td>
                            2038-01-19 09:14:07.0
                        </td>
                        <td>
                            BBC
                        </td>
                        <td>
                            <a href="/detailNews?id=2&amp;id=2%>" class="btn btn-info btn-sm details-knopka">DETAILS</a>
                        </td>
                        <td>
                            <button type="button" class="btn btn-success btn-sm float-right ml-2" data-toggle="modal" data-target="#edModal">
                                EDIT
                            </button>
                        </td>
                    </tr>




                    <tr>
                        <td>
                            3
                        </td>
                        <td>
                            Fill said yielding evening won't darkness earth him.
                        </td>
                        <td>
                            English
                        </td>
                        <td>
                            2038-01-19 09:14:07.0
                        </td>
                        <td>
                            BBC
                        </td>
                        <td>
                            <a href="/detailNews?id=3&amp;id=3%>" class="btn btn-info btn-sm details-knopka">DETAILS</a>
                        </td>
                        <td>
                            <button type="button" class="btn btn-success btn-sm float-right ml-2" data-toggle="modal" data-target="#edModal">
                                EDIT
                            </button>
                        </td>
                    </tr>




                    <tr>
                        <td>
                            4
                        </td>
                        <td>
                            Land that likeness moveth i.
                        </td>
                        <td>
                            English
                        </td>
                        <td>
                            2038-01-19 09:14:07.0
                        </td>
                        <td>
                            BBC
                        </td>
                        <td>
                            <a href="/detailNews?id=4&amp;id=4%>" class="btn btn-info btn-sm details-knopka">DETAILS</a>
                        </td>
                        <td>
                            <button type="button" class="btn btn-success btn-sm float-right ml-2" data-toggle="modal" data-target="#edModal">
                                EDIT
                            </button>
                        </td>
                    </tr>




                    <tr>
                        <td>
                            5
                        </td>
                        <td>
                            ÐÐ
                        </td>
                        <td>
                            English
                        </td>
                        <td>
                            2020-09-30 23:15:52.0
                        </td>
                        <td>
                            BBC
                        </td>
                        <td>
                            <a href="/detailNews?id=5&amp;id=5%>" class="btn btn-info btn-sm details-knopka">DETAILS</a>
                        </td>
                        <td>
                            <button type="button" class="btn btn-success btn-sm float-right ml-2" data-toggle="modal" data-target="#edModal">
                                EDIT
                            </button>
                        </td>
                    </tr>




                    <tr>
                        <td>
                            6
                        </td>
                        <td>
                            Аримаспы
                        </td>
                        <td>
                            Russian
                        </td>
                        <td>
                            2020-09-30 23:15:52.0
                        </td>
                        <td>
                            RBK
                        </td>
                        <td>
                            <a href="/detailNews?id=6&amp;id=6%>" class="btn btn-info btn-sm details-knopka">DETAILS</a>
                        </td>
                        <td>
                            <button type="button" class="btn btn-success btn-sm float-right ml-2" data-toggle="modal" data-target="#edModal">
                                EDIT
                            </button>
                        </td>
                    </tr>




                    <tr>
                        <td>
                            7
                        </td>
                        <td>
                            Хомяки Коммунисты
                        </td>
                        <td>
                            Russian
                        </td>
                        <td>
                            2020-10-01 06:42:45.0
                        </td>
                        <td>
                            RBK
                        </td>
                        <td>
                            <a href="/detailNews?id=7&amp;id=7%>" class="btn btn-info btn-sm details-knopka">DETAILS</a>
                        </td>
                        <td>
                            <button type="button" class="btn btn-success btn-sm float-right ml-2" data-toggle="modal" data-target="#edModal">
                                EDIT
                            </button>
                        </td>
                    </tr>




                    <tr>
                        <td>
                            8
                        </td>
                        <td>
                            ВК
                        </td>
                        <td>
                            Deutsch
                        </td>
                        <td>
                            2020-10-01 11:45:54.0
                        </td>
                        <td>
                            GESTAPO
                        </td>
                        <td>
                            <a href="/detailNews?id=8&amp;id=8%>" class="btn btn-info btn-sm details-knopka">DETAILS</a>
                        </td>
                        <td>
                            <button type="button" class="btn btn-success btn-sm float-right ml-2" data-toggle="modal" data-target="#edModal">
                                EDIT
                            </button>
                        </td>
                    </tr>




                    <tr>
                        <td>
                            9
                        </td>
                        <td>
                            Ikumi Nakamura was kidnapped by Todd Howard
                        </td>
                        <td>
                            Japonglish
                        </td>
                        <td>
                            2020-10-01 12:07:35.0
                        </td>
                        <td>
                            TASS
                        </td>
                        <td>
                            <a href="/detailNews?id=9&amp;id=9%>" class="btn btn-info btn-sm details-knopka">DETAILS</a>
                        </td>
                        <td>
                            <button type="button" class="btn btn-success btn-sm float-right ml-2" data-toggle="modal" data-target="#edModal">
                                EDIT
                            </button>
                        </td>
                    </tr>




                    <tr>
                        <td>
                            10
                        </td>
                        <td>
                            ВК
                        </td>
                        <td>
                            Italian
                        </td>
                        <td>
                            2020-10-01 12:08:50.0
                        </td>
                        <td>
                            CLVDIS
                        </td>
                        <td>
                            <a href="/detailNews?id=10&amp;id=10%>" class="btn btn-info btn-sm details-knopka">DETAILS</a>
                        </td>
                        <td>
                            <button type="button" class="btn btn-success btn-sm float-right ml-2" data-toggle="modal" data-target="#edModal">
                                EDIT
                            </button>
                        </td>
                    </tr>





                    </tbody></table>
                </div>
            </div>
        </div>
    </main>
</div>
</body>
</html>