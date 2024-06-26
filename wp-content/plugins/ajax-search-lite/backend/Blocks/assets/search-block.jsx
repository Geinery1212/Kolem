;( function() {
    if (
        typeof wp == 'undefined' ||
        typeof wp.blocks == 'undefined' ||
        typeof wp.i18n == 'undefined' ||
        typeof wp.i18n.__ == 'undefined' ||
        typeof wp.blocks.registerBlockType == 'undefined'
    )
        return false;

    const { __ } = wp.i18n;
    const { serverSideRender: ServerSideRender } = wp;
    const { registerBlockType, query } = wp.blocks;
    const domain = 'ajax-search-lite';

    /**
     * AslShortcode block
     */
    function AslShortcode() {
        return '[wd_asl]';
    }

    registerBlockType( 'ajax-search-lite/block-asl-main', {
        title: __( 'Ajax Search Lite', domain ),
        icon: <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 512 512"><path d="M460.355 421.59l-106.51-106.512c20.04-27.553 31.884-61.437 31.884-98.037C385.73 124.935 310.792 50 218.685 50c-92.106 0-167.04 74.934-167.04 167.04 0 92.107 74.935 167.042 167.04 167.042 34.912 0 67.352-10.773 94.184-29.158L419.945 462l40.41-40.41zM100.63 217.04c0-65.095 52.96-118.055 118.056-118.055 65.098 0 118.057 52.96 118.057 118.056 0 65.097-52.96 118.057-118.057 118.057-65.096 0-118.055-52.96-118.055-118.056z"></path></svg>,
        category: 'widgets',
        keywords: [
            __( 'search' ),
            __( 'ajax' )
        ],
        edit: function( props ) {
            return (
                <ServerSideRender block="ajax-search-lite/block-asl-main"/>
            )
        },
        save: function( props ) {
            return (
                <AslShortcode/>
            );
        }
    } );
} ());