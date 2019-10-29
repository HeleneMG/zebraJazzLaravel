@extends('layouts.template')

@section('header')

@section('content')
                <div class="app1">
                    <section class="contact">
                        <h2>Formulaire de contact</h2>
                        <form @submit.prevent="envoyerFormAjax" method="POST" action="contact/store" enctype="multipart/form-data" id="contact-form">
                            <label>
                                <span>Nom</span>
                                <input type="text" name="nom" required placeholder="entrez votre nom">
                            </label>

                            <label>
                                <span>Prénom</span>
                                <input type="text" name="prenom" required placeholder="entrez votre prénom">
                            </label>

                            <label>
                                <span>Email</span>
                                <input type="email" name="email" required placeholder="entrez votre email">
                            </label>

                            <label>
                                <span>Message</span>
                                <textarea name="message" cols="10" rows="5" required placeholder="entrez votre message"></textarea>
                            </label>

                            <button type="submit" reset>Envoyer</button>
                            <div class="confirmation">
                                @{{ confirmation }}
                                @{{ erreur }}
                            </div>
                            @csrf
                        </form>
                    </section>
                </div>
@endsection

@section('footer')
