<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class WikipediaTest extends DuskTestCase
{
    public function test_can_see_wikipedia_page()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('https://en.wikipedia.org/')
                    ->assertSee('Wikipedia');
        });
    }

    public function test_can_search_for_article()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('https://en.wikipedia.org/')
                    ->waitFor('input[name="search"]', 5)
                    ->type('input[name="search"]', 'Brazil')
                    ->keys('input[name="search"]', '{enter}')
                    ->waitForText('Brazil', 10)
                    ->assertSee('Brazil')
                    ->assertSee('Federative Republic of Brazil');
        });
    }

    public function test_can_navigate_to_random_article()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('https://en.wikipedia.org/')
                    ->clickLink('Random article')
                    ->waitFor('#firstHeading', 10)
                    ->assertPresent('#firstHeading');
        });
    }

    public function test_can_view_article_details()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('https://en.wikipedia.org/wiki/Brazil')
                    ->waitFor('#firstHeading', 5)
                    ->assertSee('Brazil')
                    ->assertPresent('.infobox')
                    ->assertSee('Capital')
                    ->assertSee('Brasília');
        });
    }

    public function test_can_view_article_history()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('https://en.wikipedia.org/wiki/Brazil')
                    ->waitFor('#ca-history a', 5)
                    ->click('#ca-history a')
                    ->waitForText('Revision history', 10)
                    ->assertSee('Revision history')
                    ->assertPresent('.mw-contributions-list');
        });
    }

    public function test_can_view_references_in_article()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('https://en.wikipedia.org/wiki/Brazil')
                    ->waitFor('#References', 5)
                    ->scrollIntoView('#References')
                    ->assertSee('References')
                    ->assertPresent('.reflist');
        });
    }
}
