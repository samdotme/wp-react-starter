const { registerBlockType } = wp.blocks;
const blockStyle = { backgroundColor: '#900', color: '#fff', padding: '20px' };

registerBlockType( 'gutenberg-boilerplate-esnext/hello-world-step-01', {
    title: 'Hello World (Step 1)',

    icon: 'universal-access-alt',

    category: 'layout',

    edit() {
        return <p style={ blockStyle }>Hello editor.</p>;
    },

    save() {
        return <p style={ blockStyle }>Hello saved content.</p>;
    },
} );
