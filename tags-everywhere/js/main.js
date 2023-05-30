import { extend } from 'flarum/extend';
import app from 'flarum/app';
import IndexPage from 'flarum/components/IndexPage';

app.initializers.add('FiveWTF-tags-everywhere', () => {
  extend(IndexPage.prototype, 'sidebarItems', function (items) {
    const tags = app.store.all('tags');
    items.add('tags', m('.TagsWidget', [
      m('h4', 'Tags'),
      m('ul', tags.map(tag => m('li', tag.name())))
    ]));
  });
});
