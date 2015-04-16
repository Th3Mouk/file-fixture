<?php

use holyshared\fixture\loader\FileLoader;
use holyshared\fixture\loader\ArtLoader;
use holyshared\fixture\loader\TemplateLoader;


describe('ArtLoader', function() {
    describe('#load', function() {
        beforeEach(function() {
            $loader = new FileLoader();
            $loader = new TemplateLoader($loader);
            $this->loader = new ArtLoader($loader);
            $this->template = __DIR__ . '/../fixtures/art.txt';
        });
        it('return loaded content', function() {
            $template = $this->template;
            expect(function () use($template) {
                $values = [ 'name' => 'foo' ];
                echo $this->loader->load($template, $values);
            })->toPrint("[m[32mfoo[0m\n[0m");
        });
    });
});