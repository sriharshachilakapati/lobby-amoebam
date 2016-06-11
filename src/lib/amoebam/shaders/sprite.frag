#ifdef GL_ES
    precision mediump float;
#endif

uniform sampler2D sprite;
varying vec2      vTexCoords;

void main()
{
    gl_FragColor = texture2D(sprite, vTexCoords);
}