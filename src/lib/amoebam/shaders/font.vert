#ifdef GL_ES
    precision mediump float;
#endif

uniform mat4 proj;

attribute vec3 position;
attribute vec2 texCoords;

varying vec2 vTexCoords;

void main()
{
    vTexCoords = texCoords;
    gl_Position = proj * vec4(position, 1.0);
}